# CodeIgniter Helper: Sorting multidimensional arrays

**ci-array-sorter**

## About this helper

Many projects of digital agencies use a feature again and again: **Rankings**.  
Most of the time we obtain the rankings information from the database, gathering user information and their plays (score, time, friends, stage of game, etc...). But it's difficult to sort this information, because several times the desired logic is (how to say it?) complicated. But fear not, as we have a solution for this, and we just have to use a helper.  
  
Its usage is recommended for CodeIgniter 2 or greater.  

## Usage

```php
$this->load->helper('array_sorter');

// prepare the ranking info
$data = array();
$data[] = array('id' => 1,  'name' => 'Ezequiel',   'time' => 14234, 'points' => 8,  'friends' => 23);
$data[] = array('id' => 2,  'name' => 'Dumme',      'time' => 14234, 'points' => 8,  'friends' => 0);
$data[] = array('id' => 3,  'name' => 'Carla',      'time' => 14234, 'points' => 8,  'friends' => 17);
$data[] = array('id' => 4,  'name' => 'Yegor',      'time' => 11342, 'points' => 7,  'friends' => 12);
$data[] = array('id' => 5,  'name' => 'Diego',      'time' => 17304, 'points' => 3,  'friends' => 8);
$data[] = array('id' => 6,  'name' => 'Steve',      'time' => 13271, 'points' => 8,  'friends' => 20);
$data[] = array('id' => 7,  'name' => 'Alejandro',  'time' => 1932,  'points' => 10, 'friends' => 2);
$data[] = array('id' => 8,  'name' => 'Juan Pablo', 'time' => 11878, 'points' => 9,  'friends' => 32);
$data[] = array('id' => 9,  'name' => 'Andrea',     'time' => 1932,  'points' => 6,  'friends' => 7);
$data[] = array('id' => 10, 'name' => 'Emiliano',   'time' => 13413, 'points' => 7,  'friends' => 14);
$data[] = array('id' => 11, 'name' => 'Guillermo',  'time' => 19303, 'points' => 8,  'friends' => 4);

// Pass the array, followed by the column names and sort flags
$sorted = array_order_by($data, 'points', SORT_DESC, 'time', SORT_ASC, 'friends', SORT_DESC);
```

## Example

The contents of the original array can be seen in the following list:

![Original list](http://alemohamad.com/github/array_list1.png)

And after passing through the method we will get the following list:

![Ordered list](http://alemohamad.com/github/array_list2.png)

That looks really good, right?

![Ale Mohamad](http://alemohamad.com/github/logo2012am.png)
