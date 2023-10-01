app
│  ├─ Console
│  │  └─ Kernel.php
│  ├─ Exceptions
│  │  ├─ CustomException.php
│  │  └─ Handler.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Auth
│  │  │  │  ├─ ConfirmPasswordController.php
│  │  │  │  ├─ ForgotPasswordController.php
│  │  │  │  ├─ LoginController.php
│  │  │  │  ├─ RegisterController.php
│  │  │  │  ├─ ResetPasswordController.php
│  │  │  │  └─ VerificationController.php
│  │  │  ├─ Backoffice
│  │  │  │  ├─ Categories
│  │  │  │  │  ├─ CategoriesGetController.php
│  │  │  │  │  ├─ CategoryCreateController.php
│  │  │  │  │  ├─ CategoryDeleteController.php
│  │  │  │  │  ├─ CategoryEditController.php
│  │  │  │  │  ├─ CategoryGetController.php
│  │  │  │  │  ├─ CategoryStoreController.php
│  │  │  │  │  └─ CategoryUpdateController.php
│  │  │  │  ├─ Products
│  │  │  │  │  ├─ ProductCreateController.php
│  │  │  │  │  ├─ ProductDeleteController.php
│  │  │  │  │  ├─ ProductEditController.php
│  │  │  │  │  ├─ ProductGetController.php
│  │  │  │  │  ├─ ProductsGetController.php
│  │  │  │  │  ├─ ProductStoreController.php
│  │  │  │  │  └─ ProductUpdateController.php
│  │  │  │  └─ Stock
│  │  │  │     ├─ CreateStockMovementController.php
│  │  │  │     ├─ DeleteStockMovementController.php
│  │  │  │     ├─ EditStockMovementController.php
│  │  │  │     ├─ GetStockMovementController.php
│  │  │  │     ├─ GetStockMovementsController.php
│  │  │  │     ├─ StockUpdateController.php
│  │  │  │     └─ StoreStockMovementController.php
│  │  │  ├─ Controller.php
│  │  │  └─ Frontoffice
│  │  │     ├─ Cart
│  │  │     │  ├─ AddToCartController.php
│  │  │     │  ├─ AsyncShowCartController.php
│  │  │     │  ├─ CartGetController.php
│  │  │     │  ├─ CartItemDeleteController.php
│  │  │     │  ├─ CartItemQuantityController.php
│  │  │     │  └─ DeleteCartController.php
│  │  │     ├─ Home
│  │  │     │  ├─ GetHomeBestsellingProductsController.php
│  │  │     │  ├─ GetHomeFeaturedProductsController.php
│  │  │     │  ├─ GetHomeOnSaleProductsController.php
│  │  │     │  └─ GetProductsCardListController.php
│  │  │     ├─ OrderManager
│  │  │     ├─ Product
│  │  │     │  └─ ProductController.php
│  │  │     └─ ProductList
│  │  │        └─ ProductListGetController.php
│  │  └─ Kernel.php
│  │
│  ├─ Models
│  │  └─ User.php
│  └─ View
│     └─ Components
│        ├─ backoffice
│        │  └─ MainAdministrationSidebar.php
│        ├─ dashboard.php
│        └─ frontoffice
│           ├─ home
│           │  └─ ProductCardList.php
│           ├─ mainCarousel.php
│           ├─ mainUsersNavBar.php
│           ├─ product
│           │  └─ ProductMain.php
│           ├─ productList
│           │  └─ productsList.php
│           └─ products
│              └─ ProductListOld.php
├─ database
│  ├─ factories
│  │  ├─ CategoryFactory.php
│  │  ├─ ProductFactory.php
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 2014_10_12_000000_create_users_table.php
│  │  ├─ 2014_10_12_100000_create_password_resets_table.php
│  │  ├─ 2014_10_12_100000_create_password_reset_tokens_table.php
│  │  ├─ 2019_08_19_000000_create_failed_jobs_table.php
│  │  ├─ 2019_12_14_000001_create_personal_access_tokens_table.php
│  │  ├─ 2023_06_14_100211_create_categories_table.php
│  │  ├─ 2023_06_14_120013_create_products_table.php
│  │  ├─ 2023_07_12_174241_create_stock_movement_types_table.php
│  │  ├─ 2023_07_12_178056_create_stock_movements_table.php
│  │  ├─ 2023_09_10_175803_create_order_status_types_table.php
│  │  ├─ 2023_09_10_176445_create_orders_table.php
│  │  ├─ 2023_09_12_100315_create_currencies_table.php
│  │  ├─ 2023_09_12_174801_create_product_prices_table.php
│  │  └─ 2023_09_12_174814_create_product_price_history_table.php
│  └─ seeders
│     ├─ CategorySeeder.php
│     ├─ DatabaseSeeder.php
│     ├─ OrderStatusTypeSeeder.php
│     ├─ ProductSeeder.php
│     └─ StockMovementsTypeSeeder.php
├─ resources
│  ├─ assets
│  │  └─ images
│  │     └─ favicon.ico
│  ├─ bootstrap
│  │  ├─ carousel
│  │  │  └─ carousel.css
│  │  ├─ dashboard
│  │  │  ├─ dashboard.css
│  │  │  └─ dashboard.js
│  │  └─ shared
│  │     └─ js
│  │        └─ color-modes.js
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  ├─ bootstrap.js
│  │  ├─ components
│  │  │  ├─ AddToCartButton.vue
│  │  │  ├─ CartComponent.vue
│  │  │  ├─ mainUsersNavBar
│  │  │  │  └─ CartButton.vue
│  │  │  ├─ ProductCardList.vue
│  │  │  └─ ProductList.vue
│  │  └─ store
│  │     └─ index.js
│  ├─ sass
│  │  ├─ app.scss
│  │  └─ _variables.scss
│  └─ views
│     ├─ auth
│     │  ├─ login.blade.php
│     │  ├─ passwords
│     │  │  ├─ confirm.blade.php
│     │  │  ├─ email.blade.php
│     │  │  └─ reset.blade.php
│     │  ├─ register.blade.php
│     │  └─ verify.blade.php
│     ├─ backoffice
│     │  └─ layouts
│     │     └─ administration.blade.php
│     ├─ components
│     │  ├─ backoffice
│     │  │  ├─ categories
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  ├─ layouts
│     │  │  │  ├─ dashboard.blade.php
│     │  │  │  ├─ main-administration-sidebar.blade.php
│     │  │  │  └─ main.blade.php
│     │  │  ├─ OrderManager
│     │  │  ├─ products
│     │  │  │  ├─ create.blade.php
│     │  │  │  ├─ edit.blade.php
│     │  │  │  ├─ index.blade.php
│     │  │  │  └─ show.blade.php
│     │  │  └─ stock
│     │  │     ├─ create.blade.php
│     │  │     ├─ edit.blade.php
│     │  │     ├─ index.blade.php
│     │  │     └─ show.blade.php
│     │  ├─ frontoffice
│     │  │  ├─ cart
│     │  │  │  └─ cart.blade.php
│     │  │  ├─ home
│     │  │  │  ├─ header.blade.php
│     │  │  │  ├─ home-main.blade.php
│     │  │  │  └─ product-card-list.blade.php
│     │  │  ├─ layouts
│     │  │  │  └─ app.blade.php
│     │  │  ├─ main-carousel.blade.php
│     │  │  ├─ main-users-nav-bar.blade.php
│     │  │  ├─ orderManager
│     │  │  ├─ products
│     │  │  │  └─ product-main.blade.php
│     │  │  └─ productsList
│     │  │     ├─ products-list.blade.php
│     │  │     └─ products-main.blade.php
│     │  └─ shared
│     │     └─ footer.blade.php
│     ├─ errors
│     │  ├─ 401.blade.php
│     │  ├─ 403.blade.php
│     │  ├─ 404.blade.php
│     │  ├─ 419.blade.php
│     │  ├─ 429.blade.php
│     │  ├─ 500.blade.php
│     │  ├─ 503.blade.php
│     │  ├─ custom.blade.php
│     │  ├─ illustrated-layout.blade.php
│     │  ├─ layout.blade.php
│     │  └─ minimal.blade.php
│     ├─ layouts
│     │  └─ auth.blade.php
│     └─ shopinstyle.blade.php
├─ src
│  ├─ backoffice
│  │  ├─ Categories
│  │  │  ├─ Application
│  │  │  │  ├─ Create
│  │  │  │  │  ├─ CategoryCreator.php
│  │  │  │  │  ├─ CreateCategoryCommand.php
│  │  │  │  │  └─ CreateCategoryCommandHandler.php
│  │  │  │  ├─ Delete
│  │  │  │  │  ├─ CategoryDeleter.php
│  │  │  │  │  ├─ DeleteCategoryCommand.php
│  │  │  │  │  └─ DeleteCategoryCommandHandler.php
│  │  │  │  ├─ Find
│  │  │  │  │  ├─ CategoriesGet.php
│  │  │  │  │  └─ CategoryFinder.php
│  │  │  │  └─ Update
│  │  │  │     ├─ CategoryUpdater.php
│  │  │  │     ├─ UpdateCategoryCommand.php
│  │  │  │     └─ UpdateCategoryCommandHandler.php
│  │  │  ├─ Domain
│  │  │  │  ├─ Category.php
│  │  │  │  ├─ CategoryEnabled.php
│  │  │  │  ├─ CategoryId.php
│  │  │  │  ├─ CategoryName.php
│  │  │  │  ├─ CategoryNotExist.php
│  │  │  │  ├─ CategoryRepository.php
│  │  │  │  └─ Providers
│  │  │  │     └─ CategoryServiceProvider.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           ├─ EloquentCategoryModel.php
│  │  │           └─ EloquentCategoryRepository.php
│  │  ├─ OrderManager
│  │  │  ├─ Application
│  │  │  ├─ Domain
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           └─ OrderEloquentModel.php
│  │  ├─ OrderStatusTypes
│  │  │  ├─ Application
│  │  │  ├─ Domain
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           └─ OrderStatusTypeEloquentModel.php
│  │  ├─ ProductPrices
│  │  │  ├─ Application
│  │  │  ├─ Domain
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           └─ ProductPricesEloquentModel.php
│  │  ├─ ProductPricesHistory
│  │  │  ├─ Application
│  │  │  ├─ Domain
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           └─ ProductPricesHistoryEloquentModel.php
│  │  ├─ Products
│  │  │  ├─ Application
│  │  │  │  ├─ Create
│  │  │  │  │  ├─ CreateProductCommand.php
│  │  │  │  │  ├─ CreateProductCommandHandler.php
│  │  │  │  │  └─ ProductCreator.php
│  │  │  │  ├─ Delete
│  │  │  │  │  ├─ DeleteProductCommand.php
│  │  │  │  │  ├─ DeleteProductCommandHandler.php
│  │  │  │  │  └─ ProductDeleter.php
│  │  │  │  ├─ Find
│  │  │  │  │  ├─ ProductFinder.php
│  │  │  │  │  └─ ProductsGet.php
│  │  │  │  └─ Update
│  │  │  │     ├─ ProductUpdater.php
│  │  │  │     ├─ UpdateProductCommand.php
│  │  │  │     └─ UpdateProductCommandHandler.php
│  │  │  ├─ Domain
│  │  │  │  ├─ Product.php
│  │  │  │  ├─ ProductDescription.php
│  │  │  │  ├─ ProductDescriptionShort.php
│  │  │  │  ├─ ProductEnabled.php
│  │  │  │  ├─ ProductId.php
│  │  │  │  ├─ ProductLowStockAlert.php
│  │  │  │  ├─ ProductLowStockThreshold.php
│  │  │  │  ├─ ProductMinimumQuantity.php
│  │  │  │  ├─ ProductName.php
│  │  │  │  ├─ ProductNotExist.php
│  │  │  │  ├─ ProductRepository.php
│  │  │  │  ├─ ProductUnitPrice.php
│  │  │  │  └─ Providers
│  │  │  │     └─ ProductServiceProvider.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        ├─ Eloquent
│  │  │        │  ├─ EloquentProductRepository.php
│  │  │        │  └─ ProductEloquentModel.php
│  │  │        └─ RawSql
│  │  ├─ Stock
│  │  │  ├─ Application
│  │  │  │  ├─ Create
│  │  │  │  │  ├─ CreateStockCommand.php
│  │  │  │  │  ├─ CreateStockCommandHandler.php
│  │  │  │  │  └─ StockCreator.php
│  │  │  │  ├─ Delete
│  │  │  │  │  ├─ DeleteStockCommand.php
│  │  │  │  │  ├─ DeleteStockCommandHandler.php
│  │  │  │  │  └─ StockDeleter.php
│  │  │  │  ├─ Find
│  │  │  │  │  ├─ StockFinder.php
│  │  │  │  │  └─ StockGet.php
│  │  │  │  └─ Update
│  │  │  │     ├─ StockUpdater.php
│  │  │  │     ├─ UpdateStockCommand.php
│  │  │  │     └─ UpdateStockCommandHandler.php
│  │  │  ├─ Domain
│  │  │  │  ├─ Interfaces
│  │  │  │  │  ├─ StockAvailabilityServiceInterface.php
│  │  │  │  │  ├─ StockMovementTypeCheckerServiceInterface.php
│  │  │  │  │  ├─ StockQuantitySignHandlerServiceInterface.php
│  │  │  │  │  ├─ StockRepositoryInterface.php
│  │  │  │  │  └─ StockValidateQuantityGreaterThanZeroServiceInterface.php
│  │  │  │  ├─ Providers
│  │  │  │  │  └─ StockServiceProvider.php
│  │  │  │  ├─ Services
│  │  │  │  │  ├─ StockAvailabilityService.php
│  │  │  │  │  ├─ StockMovementTypeCheckerService.php
│  │  │  │  │  ├─ StockQuantitySignHandlerService.php
│  │  │  │  │  └─ StockValidateQuantityGreaterThanZeroService.php
│  │  │  │  ├─ Stock.php
│  │  │  │  ├─ StockNotExist.php
│  │  │  │  └─ ValueObjects
│  │  │  │     ├─ StockDate.php
│  │  │  │     ├─ StockEnabled.php
│  │  │  │     ├─ StockId.php
│  │  │  │     ├─ StockMovementTypeId.php
│  │  │  │     ├─ StockNotes.php
│  │  │  │     ├─ StockProductId.php
│  │  │  │     └─ StockQuantity.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           ├─ EloquentStockModel.php
│  │  │           └─ EloquentStockRepository.php
│  │  └─ StockMovementType
│  │     ├─ Application
│  │     │  └─ Find
│  │     │     ├─ StockMovementTypeFinder.php
│  │     │     └─ StockMovementTypeGet.php
│  │     ├─ Domain
│  │     │  ├─ Providers
│  │     │  │  └─ StockMovementTypeServiceProvider.php
│  │     │  ├─ StockMovementType.php
│  │     │  ├─ StockMovementTypeEnabled.php
│  │     │  ├─ StockMovementTypeId.php
│  │     │  ├─ StockMovementTypeName.php
│  │     │  ├─ StockMovementTypeNotes.php
│  │     │  ├─ StockMovementTypeNotExist.php
│  │     │  └─ StockMovementTypeRepository.php
│  │     └─ Infrastructure
│  │        └─ Persistence
│  │           └─ Eloquent
│  │              ├─ EloquentStockMovementTypeModel.php
│  │              └─ EloquentStockMovementTypeRepository.php
│  ├─ frontoffice
│  │  ├─ Cart
│  │  │  ├─ Application
│  │  │  │  ├─ Delete
│  │  │  │  │  ├─ CartItemDeleter.php
│  │  │  │  │  ├─ DeleteCartItemCommand.php
│  │  │  │  │  └─ DeleteCartItemCommandHandler.php
│  │  │  │  ├─ Find
│  │  │  │  │  └─ CartGet.php
│  │  │  │  └─ Update
│  │  │  │     ├─ CartUpdater.php
│  │  │  │     ├─ UpdateCartCommand.php
│  │  │  │     └─ UpdateCartCommandHandler.php
│  │  │  ├─ Domain
│  │  │  │  ├─ Cart.php
│  │  │  │  ├─ ICartSessionManager.php
│  │  │  │  ├─ Interfaces
│  │  │  │  │  └─ ICartRepository.php
│  │  │  │  ├─ ISessionManager.php
│  │  │  │  ├─ ProductId.php
│  │  │  │  ├─ ProductName.php
│  │  │  │  ├─ ProductQty.php
│  │  │  │  ├─ ProductUnitPrice.php
│  │  │  │  └─ Providers
│  │  │  │     └─ CartSessionServiceProvider.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Session
│  │  │           ├─ CartRepository.php
│  │  │           └─ CartSessionCookieManager.php
│  │  ├─ Categories
│  │  │  ├─ Application
│  │  │  │  └─ Find
│  │  │  │     ├─ CategoriesGet.php
│  │  │  │     └─ CategoryFinder.php
│  │  │  ├─ Domain
│  │  │  │  ├─ CategoryEnabled.php
│  │  │  │  ├─ CategoryId.php
│  │  │  │  ├─ CategoryName.php
│  │  │  │  ├─ CategoryNotExist.php
│  │  │  │  ├─ CategoryRepository.php
│  │  │  │  └─ Providers
│  │  │  │     └─ CategoryServiceProvider.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           ├─ EloquentCategoryModel.php
│  │  │           └─ EloquentCategoryRepository.php
│  │  ├─ Home
│  │  │  ├─ Application
│  │  │  │  └─ Find
│  │  │  │     ├─ GetHomeProducts.php
│  │  │  │     └─ HomeProductFinder.php
│  │  │  ├─ Domain
│  │  │  │  ├─ HomeProductNotExist.php
│  │  │  │  ├─ Interfaces
│  │  │  │  │  └─ HomeProductsRepositoryInterface.php
│  │  │  │  ├─ Providers
│  │  │  │  │  └─ HomeProductServiceProvider.php
│  │  │  │  └─ Services
│  │  │  │     └─ HomeProductsListService.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        └─ Eloquent
│  │  │           ├─ HomeProductEloquentModel.php
│  │  │           └─ HomeProductEloquentRepository.php
│  │  ├─ OrderManager
│  │  ├─ Products
│  │  │  ├─ Application
│  │  │  │  └─ Find
│  │  │  │     ├─ GetEnabledProductsInActiveCategories.php
│  │  │  │     └─ ProductFinder.php
│  │  │  ├─ Domain
│  │  │  │  ├─ ProductDescription.php
│  │  │  │  ├─ ProductEnabled.php
│  │  │  │  ├─ ProductId.php
│  │  │  │  ├─ ProductName.php
│  │  │  │  ├─ ProductNotExist.php
│  │  │  │  ├─ ProductRepository.php
│  │  │  │  ├─ ProductUnitPrice.php
│  │  │  │  └─ Providers
│  │  │  │     └─ ProductServiceProvider.php
│  │  │  └─ Infrastructure
│  │  │     └─ Persistence
│  │  │        ├─ Eloquent
│  │  │        │  ├─ EloquentProductRepository.php
│  │  │        │  └─ ProductEloquentModel.php
│  │  │        └─ RawSql
│  │  │           └─ RawSqlProductRepository.php
│  │  └─ Stock
│  │     ├─ Application
│  │     │  └─ Find
│  │     │     └─ StockFinder.php
│  │     ├─ Domain
│  │     │  ├─ Interfaces
│  │     │  │  └─ StockRepositoryInterface.php
│  │     │  ├─ Providers
│  │     │  │  └─ StockServiceProvider.php
│  │     │  ├─ Services
│  │     │  ├─ StockNotExist.php
│  │     │  └─ ValueObjects
│  │     └─ Infrastructure
│  │        └─ Persistence
│  │           └─ Eloquent
│  │              ├─ EloquentStockModel.php
│  │              └─ EloquentStockRepository.php
│  └─ Shared
│     ├─ Domain
│     │  ├─ Bus
│     │  │  └─ Command
│     │  │     ├─ Command.php
│     │  │     ├─ CommandBus.php
│     │  │     ├─ CommandHandler.php
│     │  │     └─ Container.php
│     │  ├─ DomainError.php
│     │  ├─ UuidGenerator.php
│     │  └─ ValueObject
│     │     ├─ BoolValueObject.php
│     │     ├─ FloatValueObject.php
│     │     ├─ IntValueObject.php
│     │     ├─ Stringable.php
│     │     ├─ StringValueObject.php
│     │     └─ Uuid.php
│     └─ Infrastructure
│        ├─ Bus
│        │  └─ Command
│        │     └─ SimpleCommandBus.php
│        ├─ CviebrockEloquentSluggable.php
│        ├─ LaravelContainer.php
│        └─ RamseyUuidGenerator.php