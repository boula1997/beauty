<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Subcategory;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Color;
use App\Models\Size;
use App\Models\Category;
use Illuminate\Http\Request;

use Exception;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $products;
    private $brands;
    private $colors;
    private $sizes;
    private $categories;
    

    public function __construct(Product $products,Brand $brands,Color $colors,Size $sizes, Category $categories)
    {
        $this->products=$products;
        $this->brands=$brands;
        $this->colors=$colors;
        $this->sizes=$sizes;
        $this->categories=$categories;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        try {
            $query = ProductVariation::where('quantity', '>', 0);
    
            if ($request->filled('category_id')) {
                $query->whereHas('product', function ($q) use ($request) {
                    $q->whereIn('category_id', (array) $request->category_id);
                });
            }
    
            if ($request->filled('color_id')) {
                $query->whereIn('color_id', (array) $request->color_id);
            }
    
            if ($request->filled('size_id')) {
                $query->whereIn('size_id', (array) $request->size_id);
            }
    
            if ($request->filled('min_price') && $request->filled('max_price')) {
                $query->whereBetween('price', [$request->min_price, $request->max_price]);
            }
    
            // Preserve filters in pagination links
            $variations = $query->latest()->paginate(9)->appends($request->query());
    
            $categories = Category::all();
            $brands = Brand::all();
            $colors = Color::all();
            $sizes = Size::all();
    
            return view('front.products.index', compact('variations', 'brands', 'colors', 'sizes', 'categories'));
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    
    
    
    
    public function search(Request $request)
    {
        try {
            $perPage = $request->ajax() ? 6 : 9;

            $products = $this->products->whereHas('translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
                
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%')
                  ->orWhere('description', 'LIKE', $searchTerm)
                  ->orWhere('description', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('description', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })
            ->orWhereHas('brand.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%')
                  ->orWhere('description', 'LIKE', $searchTerm)
                  ->orWhere('description', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('description', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })
            ->orWhereHas('category.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%');

            })
            ->orWhereHas('subcategory.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%');

            })
            ->orWhereHas('store.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%')
                  ->orWhere('description', 'LIKE', $searchTerm)
                  ->orWhere('description', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('description', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })
            ->paginate($perPage);

            if ($request->ajax()) {
                return view('front.components.search_results', compact('products'))->render();
            }
            // $products=$this->products->search()->paginate(12)->appends($request->query());
            
            return view('front.products.search', compact('products'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    public function show($id)
    {
        try {
            $variation=ProductVariation::find($id);
            $product= $variation->Product;
            $relatedProducts=$this->products->where('category_id',$product->category_id)->latest()->take(6)->get();
            $products=$this->products->latest()->paginate(6);
            

            return view('front.products.show', compact('product','products','relatedProducts','variation'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    public function brandProducts($id)
    {
        try {
            
            $categories=$this->categories->latest()->get();
            $brands=$this->brands->latest()->get();
            $colors=$this->colors->latest()->get();
            $sizes=$this->sizes->latest()->get();
            
            $brand=Brand::findOrfail($id);
            $products=$brand->products()->paginate(9);

            return view('front.products.index', compact('products','brands','colors','sizes','categories'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    public function categoryProducts($id)
    {
        try {
            
            $categories=$this->categories->get();
            $brands=$this->brands->latest()->get();
            $colors=$this->colors->latest()->get();
            $sizes=$this->sizes->latest()->get();
            
            $category=Category::findOrfail($id);
            $products=$category->products()->paginate(9);

            return view('front.products.index', compact('products','brands','colors','sizes','categories'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }


    public function bannerProducts(Request $request)
    {
        try {
                        
            $products = $this->products->whereHas('translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
                
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%')
                  ->orWhere('description', 'LIKE', $searchTerm)
                  ->orWhere('description', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('description', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })
            ->orWhereHas('brand.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%')
                  ->orWhere('description', 'LIKE', $searchTerm)
                  ->orWhere('description', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('description', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })
            ->orWhereHas('category.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%');

            })
            ->orWhereHas('subcategory.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%');

            })
            ->orWhereHas('store.translations', function ($q) use ($request) {
                $searchTerm = '%' . replaceCharsAR($request['search']) . '%';
            
                $q->where('title', 'LIKE', $searchTerm)
                  ->orWhere('title', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('title', 'LIKE', '%' . strtoupper($request['search']) . '%')
                  ->orWhere('description', 'LIKE', $searchTerm)
                  ->orWhere('description', 'LIKE', '%' . strtolower($request['search']) . '%')
                  ->orWhere('description', 'LIKE', '%' . strtoupper($request['search']) . '%');
            })
            ->paginate(8);
            // $products=$this->products->search()->paginate(12)->appends($request->query());
            $categories = Category::get();
            $brands = Brand::get();
            $colors = Color::get();
            $sizes = Size::get();
            
            return view('front.products.index', compact('products','brands', 'colors', 'sizes', 'categories'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    
}