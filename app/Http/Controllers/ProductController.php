<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\FileService;

class ProductController extends Controller
{

    // protected $FileService;
    
    // public function __construct(FileService $FileService)
    // {
    //     $this->FileService = $FileService;
    // }


    public function __construct(protected FileService $fileService)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $products = Product::query();

        $keyword = $request->keyword ?? '';


        if ($request->filled('keyword')) {
            $products->where('name', 'like', "%{$keyword}%")->orWhere('desc', 'like', "%{$keyword}%");
        }
        
        
        $products = $products->paginate(5);

        // $products->withPath('/product/list?keyword=' . $keyword);
        $products->appends(['keyword' => $keyword]);

        //產品列表頁
        return view('product.cartlist', compact('products', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //新增資料頁
        return view('product.addcartlist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 驗證進來的資料是否合規範

        //新產品資料儲存功能
        // 查看請求的資料(form表單裡的input)

        // 方法1 使用Storage
        // $path = Storage::putFile('public/upload', $request->file('image'));

        // 方法2 使用fileService
        $path = $this->fileService->imgUpload($request->file('image'), 'product-image');

        Product::create([
            'name' => $request->name,
            // 'img_path' => str_replace('public', 'storage', $path),
            'img_path' => $path,
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,
        ]);

        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // 去找目標產品進行顯示
        $product = Product::find($id);
        //產品編輯頁
        return view('product.editcartlist', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // 驗證
        $product = Product::find($id);
        // 如果有上傳圖片
        // if ($request->file('image')) {
        //     $path = Storage::putFile('public/upload', $request->file('image'));
        //     Storage::delete(str_replace('storage', 'public', $product->img_path));
        //     //產品更新功能
        //     $product->update([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'status' => $request->status,
        //         'desc' => $request->desc,
        //         'img_path' => str_replace('public', 'storage', $path),
        //     ]);
        // } else {
        //     //產品更新功能
        //     $product->update([
        //         'name' => $request->name,
        //         'price' => $request->price,
        //         'status' => $request->status,
        //         'desc' => $request->desc,
        //     ]);
        // }


        if ($request->file('image')) {
            $path = $this->fileService->imgUpload($request->file('image'), 'product-image');
            $this->fileService->deleteUpload($product->img_path);
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'desc' => $request->desc,
                'img_path' => $path,
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
                'desc' => $request->desc,
            ]);
        }
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //刪除資料功能
        $product = Product::find($id);
        $this->fileService->deleteUpload($product->img_path);
        $product->delete();
        return redirect(route('product.index'));
    }
}
