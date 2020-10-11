# EasyForCake Autocomplete
Autocomplete plugin for CakePHP

<h2>Requirements</h2>

HTTP Server. For example: Apache.
PHP 5.2.8 or greater.
CakePHP 2.5.1+

<h2>Dependencies</h2>

jQuery

<h2>Installation</h2>

- upload Easyforcake folder in the /app/Plugin/ folder
- activate the plugin in /app/Config/bootstrap.php

```php
CakePlugin::loadAll(array( <br>
    'Easyforcake' => array('bootstrap' => true, 'routes' => true)
));
```

<h3>In the controller or AppController</h3>

```php
public $helpers = array('Easyforcake.Easyforcake');
```

<h3>In the View</h3>

```php
echo $this->Easyforcake->init();
```

for initializing and

```php
echo $this->Easyforcake->search(array(
    'selector' => '#q',
    'url' => '/easyforcake/autocomplete',
    'model' => 'Model',
    'field' => 'name'
)); 
```

to set the parameters.

<h3>Callback function</h3>

```javascript
function easyforcake(id,value) {
    alert(id + ' - ' + value);
}
```

<h2>License</h2>

MIT LICENSE

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
