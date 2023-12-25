 <?php

 use App\Http\Controllers\Admin\AdminController;
 use App\Http\Controllers\Admin\CategoryController;
 use App\Http\Controllers\Admin\PermissionController;
 use App\Http\Controllers\Admin\ProductController;
 use App\Http\Controllers\Admin\RoleController;
 use App\Http\Controllers\Admin\UserController;
 use App\Http\Controllers\Admin\UserPermissionController;
 use Illuminate\Support\Facades\Route;

   
    Route::get('/',[AdminController::class,'index']);

   //categories
    Route::get('all-categories',[CategoryController::class,'allcategories'])->name('all-categories');
    Route::get('create-categories',[CategoryController::class,'createcategories'])->name('create-categories');
    Route::post('store-categories',[CategoryController::class,'storecategories'])->name('store-categories');
    Route::delete('category-delete/{id}',[CategoryController::class,'deleteCategory'])->name('delete-categories');
    Route::get('edit-category/{category}',[CategoryController::class,'editCategory'])->name('edit-category');
    Route::put('update-category/{category}',[CategoryController::class,'updateCategory'])->name('update-category');


    
    //user management
   Route::get('all-users',[UserController::class,'allUsers'])->name('all-users');
   Route::get('create-user',[UserController::class,'createUser'])->name('create-user');
   Route::post('store-user',[UserController::class,'storeUser'])->name('store-user');
   Route::delete('user-delete/{id}',[UserController::class,'deleteUser'])->name('delete-user');
   Route::get('edit-user/{user}',[UserController::class,'editUser'])->name('edit-user');
   Route::put('update-user/{user}',[UserController::class,'updateUser'])->name('update-user');

   //premissions management
   Route::get('all-permissions',[PermissionController::class,'allPermissions'])->name('all-permissions');
   Route::get('create-permission',[PermissionController::class,'createPermission'])->name('create-permission');
   Route::post('store-permission',[PermissionController::class,'storePermission'])->name('store-permission');
   Route::delete('permission-delete/{id}',[PermissionController::class,'deletePermission'])->name('delete-permission');

   //premissions management
   Route::get('all-roles',[RoleController::class,'allRoles'])->name('all-roles');
   Route::get('create-role',[RoleController::class,'createRole'])->name('create-role');
   Route::post('store-role',[RoleController::class,'storeRole'])->name('store-role');
   Route::delete('role-delete/{id}',[RoleController::class,'deleteRole'])->name('delete-role');

   //permission and role users
   Route::get('users/{id}/permissions',[UserPermissionController::class,'createUserPermission'])->name('users.permissions');
   Route::post('users/{id}/permissions',[UserPermissionController::class,'storeUserPermission'])->name('users.permissions.store');

   //products management

 Route::get('all-products',[ProductController::class,'allProducts'])->name('all-products');
   Route::get('create-product',[ProductController::class,'createProduct'])->name('create-product');
   Route::post('store-product',[ProductController::class,'storeProduct'])->name('store-product');
   Route::delete('product-delete/{id}',[ProductController::class,'deleteProduct'])->name('delete-product');


