# Reports
This package helps manage analytics and counts.

## Installation

This packages requires Spatie/Analytics for the charts
You can install the package via composer:
``` bash
$ composer require maksuco/Reports
OR
$ composer require maksuco/Reports:dev-master
```
This Package works with autodiscovery in Laravel +5.5, but is compatible with older versions

## Usage


# Analytics Helpers

Analytics:Get the dates from today minus....
$period = 'month','day','year','all'
$period2 = 1,2,3, etc..

```php

  \Helpers::period($period,$period2);

```


Analytics:Get the visits and pageviews
$path = /someurl/blogname

```php

  \Helpers::counter($period,$period2,$path);

```


Analytics:Get the visits and pageviews for Charts
$path = /someurl/blogname
return [$visitors,$pageviews,$labels];

```php

  \Helpers::chart($period,$period2,$path);
  
```


Analytics:Get the visits and pageviews for Charts

```php

  \Helpers::charts($data1);
  
```


# Reports

Get the $count and $sum of 2 fields per table, the date field is the one to be used, example: created_at

```php

  \Helpers::reports($biz_id,$table,$date,$sum);
  
```

Get data for a chart Report, same as before, but this returns 'total_sum', 'total_count', 'date', 'sum' and 'count' so you can use it in charts data sets

```php

  $chart = \Helpers::reports_chart($biz_id,$table,$date,$field);
  {!! $chart['sum'] !!}
  
```




## Security

If you discover any security related issues, please report it.

## Credits
- [Maksuco.com](http://maksuco.com)
- [ReBilling.co](https://rebilling.co)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
