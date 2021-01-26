<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class categoriesController extends Controller
{
    //
    public function index()
    {
        $result = Category::all();

    	return view('adminPanel.categories.index')
    		->with('catlist', $result);
        
    }
    
    public function posted(Request $request)
    {
        $cat = new Category();
        $cat->name = $request->Name;
        $cat->type = $request->Type;
        $cat->save();
        return redirect()->route('admin.categories');
    }
    
    public function edit($id)
    {
        

        $cat = Category::find($id);
        
        return view('adminPanel.categories.edit')
            ->with('category', $cat);
    }

    public function update(Request $request, $id)
    {
      
        $catToUpdate = Category::find($request->id);
        $catToUpdate->name = $request->Name;
        $catToUpdate->type = $request->Type;
        $catToUpdate->save();
        
        return redirect()->route('admin.categories');
    }
    
    public function delete($id)
    {
       
        $cat = Category::find($id);

        return view('adminPanel.categories.delete')
            ->with('category', $cat);
    }

    public function destroy(Request $request)
    {   //Supprime la categorie en rapport avec le produit
        $prdsToDelete = Product::all()->where('category_id', $request->id);
        
        foreach ($prdsToDelete as $prdToDelete)
        {   
          //Supprime le dossier Image
        try{
            $src='uploads/products/'.$prdToDelete->id.'/';
            $dir = opendir($src);
            while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $src . '/' . $file;
                if ( is_dir($full) ) {
                    rrmdir($full);
                }
                else {
                    unlink($full);
                }
                }
            }
            closedir($dir);
            rmdir($src);
        }
        catch(\Exception $e){

        }
        //deleting image folder done
        $prdToDelete->delete();

        }
        
        $catToDelete = Category::find($request->id);
        $catToDelete->delete();

        return redirect()->route('admin.categories');
    }
}
