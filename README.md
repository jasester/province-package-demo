## Installation

```shell
$ composer require hnndy/province-package-demo
```
```shell
php artisan vendor:publish --provider="Hnndy\Province\RegionServiceProvider"
```
```shell
php artisan migrate 
```
```shell
php artisan db:seed --class=RegionTableSeeder
```
```shell
php artisan route:list
```

## Api Route
省份路由
```shell
api/v1/regions 
别名 -> regions.province 
```
城市路由
```shell
api/v1/region/{country_id}/citys 
别名 -> regions.citys 
```
区县路由
```shell
api/v1/region/{country_id}/countys  
别名 -> regions.countys 
```
街道路由
```shell
api/v1/region/{country_id}/streets  
别名 -> regions.streets
```
##Usage
```shell
$.get(route('regions.province'), function (data) {
    //返回页面
})
```
