<?php

App::uses('AppHelper', 'View/Helper');

class EasyforcakeHelper extends AppHelper {
	
	public $helpers = array('Html', 'Form', 'Session');
	
	
	
	
	public function init() {

		if (Configure::read('Easyforcake.include_jquery')) {

			echo $this->Html->script('/easyforcake/js/' .Configure::read('Easyforcake.jquery_lib.file')) ."\r\n";

		}
		
		echo $this->Html->css('/easyforcake/css/easyautocomplete/easy-autocomplete.min.css') ."\r\n";
		echo $this->Html->script('/easyforcake/js/easyautocomplete/jquery.easy-autocomplete.min.js') ."\r\n";
		
	}




	public function search($options = array()) {
		?>
		<script>
		$(document).ready(function() {

			var options = {
				url: function(phrase) {
					return "<?php echo $options['url']; ?>?phrase=" + phrase + "&format=json&model=<?php echo urlencode($options['model']); ?>&field=<?php echo urlencode($options['field']); ?>";
				},
		
				getValue: "value",
		
				list: {
					match: {
					enabled: true
					},
					onClickEvent: function() {
						var id = $('<?php echo $options['selector']; ?>').getSelectedItemData().id;
						var value = $('<?php echo $options['selector']; ?>').getSelectedItemData().value;
						easyforcake(id,value);
					}
				}
			};
		
			$('<?php echo $options['selector']; ?>').easyAutocomplete(options);
		
		});
		</script>
		<?php
	}
	
	
	
	
}

?>