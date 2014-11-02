<?php if(FF_Session::get('loggedIn') == true): ?>
	<div class="alert alert-success" role="alert">Login Successfull</div>
<?php endif; ?>

<div class="jumbotron">
  <h1>Freedom Frameworks</h1>
  <p>Featuring Amazing Bootstrap</p>
  <p><a class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-star"></span> Download v.1.0 Beta</a></p>
</div>

<div class="panel panel-success">
  <div class="panel-heading">Controller Installation</div>
  <div class="panel-body">

<pre style="text-align:left">&lt;?php if(empty($_SERVER[&#39;HTTP_REFERER&#39;])) return 0;

class Index extends FF_Controller {
	
	function __construct () {
	
		parent::__construct();

	}
	
	public function index () {
		
		$this-&gt;view-&gt;page(&#39;index/index&#39;, 0);

	}
	
	public function param($arg) {
		
		$this-&gt;view-&gt;msg($arg[0] . &#39; , &#39; . $arg[1]. &#39; , &#39; . $arg[2]. &#39; , &#39; . $arg[3]. &#39; , &#39; . $arg[4]);

	}

}

/* File_name : ./controllers/index.php */
/* Freedom Frameworks Index_Controller */</pre>

  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Controller Usage</div>
  <div class="panel-body" style="overflow-y:hidden">
		
			<table class="parameter">
			
				<tr><td>Example 1 </td><td>:</td><td><a href="<?php echo url; ?>/index/param/1/2/3/4/5"><?php echo url; ?>/index/param/1/2/3/4/5</a></td></tr>

				<tr><td>Example 2 </td><td>:</td><td><a href="<?php echo url; ?>/index.php/param/1/2/3/4/5"><?php echo url; ?>/index.php/param/1/2/3/4/5</a></td></tr>
			
			</table>
  </div>
</div>
