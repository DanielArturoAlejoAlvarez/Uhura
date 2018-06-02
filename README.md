# UHURA
## Description

This repository is a Application software with PHP7, Laravel, VUEjs and MYSQL, this application contains an application in VUEjs that connects to an API created with Laravel.

## Installation
Using PHP7, VUEjs 2 and laravel 5.5 preferably.

## Usage
```html
$ git clone https://github.com/DanielArturoAlejoAlvarez/Uhura.git [NAME APP] 
```
Follow the following steps and you're good to go! Important:


![alt text](https://d3nmt5vlzunoa1.cloudfront.net/webstorm/files/2017/12/create-new-vue-component.gif)


## Coding

### Urls

```php
...
Route::get('my-thinkings', 'ThinkController@getThinkings');
Route::post('save-think', 'ThinkController@store');

...
```

### Controllers LARAVEL


```php

...
  public function store(Request $request){
        $this->validate($request, [
            'desc'=>'required'
        ]);

        Think::create($request->all());
        return;
    }
...

```

### Views VUEJS

```javascript
...
    export default {
        data() {
            return{
                thinkings: [],
                newThink: '',
            }
        },
        created: function(){
            this.getThinkings();
        },
        methods: {
            since: function(d){
                return moment(d).fromNow();
            },
            getThinkings: function(){
                var urlThinkings = 'my-thinkings';
                axios.get(urlThinkings).then(response=>{
                    this.thinkings=response.data;
                });
            },
            createThink: function(){
                var url = 'save-think';
                axios.post(url, {
                    desc: this.newThink
                }).then(response=>{
                    this.getThinkings();
                    this.newThink='';
                    toastr.success('New think saved successfully.');
                }).catch(error=>{
                    toastr.error('ERROR!!');
                })

            }
        }
    }
...
```

### Model

```php
...
class Think extends Model
{
    protected $fillable = ['desc'];
}

...
```

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/DanielArturoAlejoAlvarez/Uhura. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.


## License

The gem is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).
