# CakePHP-GentallelaAdmin-Template
This template covered <a href="https://github.com/puikinsh/gentelella">GentallelaAdmin</a> to CakePHP 2.x template.

#Intall
Download and extract to app/View/Themed/GentallelaAdminTemplate

#Using:

#Case 1: Using as global template:
In AppController.php, add line:<br/><br/>
<code>
class AppController extends Controller {

    public $theme = 'GentallelaAdminTemplate';
}
</code>

#Case 2: Using in the controller:

<code>
class UserController extends Controller {

    public $theme = 'GentallelaAdminTemplate';
}
</code>