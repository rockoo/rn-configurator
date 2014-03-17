
Multidimensional array config getter for CodeIgniter
=====================================================

A [CodeIgniter](http://codeigniter.com) helper [Spark](http://getsparks.org/) for working with multidimensional config items.


Installation
-------------------------------------

1. Install the spark: `php tools/spark install rn-configurator` or, if not using Spark package management, copy `helpers/configurator_helper.php` to your `application/helpers` folder & autoload file in `application/config/autoload.php`:

		$autoload['helper'] = array('configurator');

2. Load the spark: `$this->load->spark('rn-configurator/0.1');` or, optionally autoload the spark in `application/config/autoload.php` to: `$autoload['sparks'] = array('rn-configurator/0.1');`.
3. Use as needed


Usage
-------------------------------------

You may now structure your config files in logical blocks

i.e.

		$config['facebookApp'] = array(
			'id' 	 => 'APP_ID',
			'secret' => 'APP_SECRET',
			'permissions' => array(
				'admin' => array(
						'manage_pages',
						'create_event',
						'email',
						'user_birthday',
						'photo_upload',
						'publish_actions',
						'publish_stream',
						'sms'
				)
			)
		);

Now you can call settings as needed:

		configItem('facebookApp.secret');
		configItem('facebookApp.permissions.admin');

License
-------------------------------------

Copyright © 2014 Rok Nemet. All Rights Reserved.

Released under the MIT License: [http://www.opensource.org/licenses/mit-license.php](http://www.opensource.org/licenses/mit-license.php)

	The MIT License

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
	associated documentation files (the “Software”), to deal in the Software without restriction,
	including without limitation the rights to use, copy, modify, merge, publish, distribute,
	sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or
	substantial portions of the Software.

	THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
	BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
	DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

