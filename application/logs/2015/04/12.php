<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-12 05:40:49 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Home.php [ 5 ] in file:line
2015-04-12 05:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 05:41:09 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Home.php [ 5 ] in file:line
2015-04-12 05:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 05:41:29 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Home.php [ 5 ] in file:line
2015-04-12 05:41:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 05:55:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/themes/default/base.php [ 23 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:23
2015-04-12 05:55:11 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 23, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(23): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:23
2015-04-12 06:17:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:17:30 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:05 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:06 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:07 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:36 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:38 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:55 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:18:56 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:19:14 --- EMERGENCY: View_Exception [ 0 ]: The requested view /theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:19:14 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('/theme/default/...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('/theme/default/...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('/theme/default/...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:19:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view theme/default/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:19:17 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('theme/default/l...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('theme/default/l...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(21): Kohana_View::factory('theme/default/l...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:23:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: siteUrl ~ APPPATH/views/themes/default/login.php [ 17 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php:17
2015-04-12 06:23:41 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 17, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(24): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php:17
2015-04-12 06:27:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/themes/default/base.php [ 5 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:5
2015-04-12 06:27:25 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 5, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(24): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:5
2015-04-12 06:27:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/themes/default/base.php [ 23 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:23
2015-04-12 06:27:42 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 23, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(24): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:23
2015-04-12 06:34:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: siteTitle ~ APPPATH/views/themes/default/base.php [ 5 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:5
2015-04-12 06:34:54 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 5, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(24): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:5
2015-04-12 06:37:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: siteTitle ~ APPPATH/views/themes/default/base.php [ 5 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:5
2015-04-12 06:37:50 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 5, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(22): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:5
2015-04-12 06:40:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/themes/default/login.php [ 5 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php:5
2015-04-12 06:40:44 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 5, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(23): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php:5
2015-04-12 06:40:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH/views/themes/default/login.php [ 8 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php:8
2015-04-12 06:40:56 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 8, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(23): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/login.php:8
2015-04-12 06:41:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/themes/default/register.php [ 5 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/register.php:5
2015-04-12 06:41:23 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/register.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 5, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(23): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Home->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/register.php:5
2015-04-12 06:48:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/dashboard could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:48:03 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/dashboar...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/dashboar...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Dashboard.php(11): Kohana_View::factory('manage/dashboar...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Manage_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:50:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/themes/default/base.php [ 34 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:50:58 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 34, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Base.php(20): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:50:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view themes/default/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: loginUrl
	
		APPPATH/views/themes/default/base.php [ 34 ]
		29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;
		
					
				
					
													APPPATH/views/themes/default/base.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(28) "Undefined variable: loginUrl"
						
											
							2
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							3
							integer 34
						
											
							4
							array(6) (
    "kohana_view_filename" => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Base.php [ 20 ]
											
					&raquo;
					Kohana_View->__toString()
				
													15 		foreach($data as $key =&gt; $value) View::bind_global($key, $data[$key]);
16 	}
17 
18 	public function after()
19 	{
20 		$view = View::factory('themes/default/' . $this-&gt;template);
21 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
22 		$this-&gt;response-&gt;body($view);
23 	}
24 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Base->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Home(6) {
    private template => object View(2) {
        protected _file => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
        protected _data => array(0) 
    }
    private data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(25) "(&lt;controller&gt;(/&lt;action&gt;))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "home"
                "action" => string(5) "index"
            )
            protected _route_regex => string(69) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++))?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "Home"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
    public template => string(4) "base"
    public data => array(1) (
        "loginUrl" => string(6) "/login"
    )
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(25) "(&lt;controller&gt;(/&lt;action&gt;))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(69) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++))?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Home"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(25) "(&lt;controller&gt;(/&lt;action&gt;))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(69) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++))?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Home"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (60)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Home.php
				
								
					APPPATH/classes/Controller/Base.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/themes/default/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(1) "/"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62336"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428839458.6622
				
								
					REQUEST_TIME
					integer 1428839458
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:50:58 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('themes/default/...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('themes/default/...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Base.php(20): Kohana_View::factory('themes/default/...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/themes/default/base.php [ 34 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:26 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 34, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: loginUrl
	
		APPPATH/views/themes/default/base.php [ 34 ]
		29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;
		
					
				
					
													APPPATH/views/themes/default/base.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(28) "Undefined variable: loginUrl"
						
											
							2
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							3
							integer 34
						
											
							4
							array(6) (
    "kohana_view_filename" => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 25 ]
											
					&raquo;
					Kohana_View->__toString()
				
													20 		foreach($data as $key =&gt; $value) View::bind_global($key, $data[$key]);
21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/' . $this-&gt;template);
26 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
27 		$this-&gt;response-&gt;body($view);
28 	}
29 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(5) {
    public template => object View(2) {
        protected _file => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
        protected _data => array(0) 
    }
    public data => array(0) 
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (63)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/dashboard.php
				
								
					APPPATH/views/themes/default/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62356"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428839546.287
				
								
					REQUEST_TIME
					integer 1428839546
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:26 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/themes/default/base.php [ 34 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:34 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 34, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: loginUrl
	
		APPPATH/views/themes/default/base.php [ 34 ]
		29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;
		
					
				
					
													APPPATH/views/themes/default/base.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(28) "Undefined variable: loginUrl"
						
											
							2
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							3
							integer 34
						
											
							4
							array(6) (
    "kohana_view_filename" => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 25 ]
											
					&raquo;
					Kohana_View->__toString()
				
													20 		foreach($data as $key =&gt; $value) View::bind_global($key, $data[$key]);
21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/' . $this-&gt;template);
26 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
27 		$this-&gt;response-&gt;body($view);
28 	}
29 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(4) {
    public template => object View(2) {
        protected _file => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
        protected _data => array(0) 
    }
    public data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (61)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/dashboard.php
				
								
					APPPATH/views/themes/default/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62356"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428839554.3507
				
								
					REQUEST_TIME
					integer 1428839554
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:34 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/themes/default/base.php [ 34 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:35 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 34, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: loginUrl
	
		APPPATH/views/themes/default/base.php [ 34 ]
		29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;
		
					
				
					
													APPPATH/views/themes/default/base.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(28) "Undefined variable: loginUrl"
						
											
							2
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							3
							integer 34
						
											
							4
							array(6) (
    "kohana_view_filename" => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 25 ]
											
					&raquo;
					Kohana_View->__toString()
				
													20 		foreach($data as $key =&gt; $value) View::bind_global($key, $data[$key]);
21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/' . $this-&gt;template);
26 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
27 		$this-&gt;response-&gt;body($view);
28 	}
29 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(4) {
    public template => object View(2) {
        protected _file => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
        protected _data => array(0) 
    }
    public data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (61)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/dashboard.php
				
								
					APPPATH/views/themes/default/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62356"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428839555.8308
				
								
					REQUEST_TIME
					integer 1428839555
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:35 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/themes/default/base.php [ 34 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:42 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 34, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: loginUrl
	
		APPPATH/views/themes/default/base.php [ 34 ]
		29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;
		
					
				
					
													APPPATH/views/themes/default/base.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(28) "Undefined variable: loginUrl"
						
											
							2
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							3
							integer 34
						
											
							4
							array(6) (
    "kohana_view_filename" => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 25 ]
											
					&raquo;
					Kohana_View->__toString()
				
													20 		foreach($data as $key =&gt; $value) View::bind_global($key, $data[$key]);
21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/' . $this-&gt;template);
26 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
27 		$this-&gt;response-&gt;body($view);
28 	}
29 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(4) {
    protected template => object View(2) {
        protected _file => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
        protected _data => array(0) 
    }
    protected data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (61)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/dashboard.php
				
								
					APPPATH/views/themes/default/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62356"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428839562.3697
				
								
					REQUEST_TIME
					integer 1428839562
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:42 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: loginUrl ~ APPPATH/views/themes/default/base.php [ 34 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:43 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 34, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php:34
2015-04-12 06:52:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: loginUrl
	
		APPPATH/views/themes/default/base.php [ 34 ]
		29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;
		
					
				
					
													APPPATH/views/themes/default/base.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(28) "Undefined variable: loginUrl"
						
											
							2
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							3
							integer 34
						
											
							4
							array(6) (
    "kohana_view_filename" => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													29                 &lt;li&gt;&lt;a href="features.html"&gt;亮点&lt;/a&gt;&lt;/li&gt;
30                 &lt;li&gt;&lt;a href="price.html"&gt;下载&lt;/a&gt;&lt;/li&gt;
31                 &lt;li&gt;&lt;a href="blog.html"&gt;动态&lt;/a&gt;&lt;/li&gt;
32                 &lt;li&gt;
33                     &lt;div class="m-t-sm"&gt;&lt;a
34                             href="&lt;?php p($loginUrl); ?&gt;" class="btn btn-sm btn-success m-l"&gt;&lt;strong&gt;注册/登陆&lt;/strong&gt;&lt;/a&gt;&lt;/div&gt;
35                 &lt;/li&gt;
36             &lt;/ul&gt;
37         &lt;/div&gt;
38     &lt;/div&gt;
39 &lt;/header&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 25 ]
											
					&raquo;
					Kohana_View->__toString()
				
													20 		foreach($data as $key =&gt; $value) View::bind_global($key, $data[$key]);
21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/' . $this-&gt;template);
26 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
27 		$this-&gt;response-&gt;body($view);
28 	}
29 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(4) {
    protected template => object View(2) {
        protected _file => string(92) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/themes/default/base.php"
        protected _data => array(0) 
    }
    protected data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(24739) "&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="app"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"/&gt;
	&lt;title&gt;Notebook | Web Application&lt;/title&gt;
	&lt;meta n&nbsp;&hellip;"
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (61)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/dashboard.php
				
								
					APPPATH/views/themes/default/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62356"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428839563.9276
				
								
					REQUEST_TIME
					integer 1428839563
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:52:44 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(25): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 06:57:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ketwords ~ APPPATH/views/manage/dashboard.php [ 6 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:57:56 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 6, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(27): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:58:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ketwords ~ APPPATH/views/manage/dashboard.php [ 6 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:58:03 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 6, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(27): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:58:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ketwords ~ APPPATH/views/manage/dashboard.php [ 6 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:58:06 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 6, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(27): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:58:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ketwords ~ APPPATH/views/manage/dashboard.php [ 6 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 06:58:08 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 6, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(27): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/dashboard.php:6
2015-04-12 07:05:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/ could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 07:05:23 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(27): Kohana_View::factory('manage/')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 07:07:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/manage/base.php [ 296 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:07:01 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(296): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 296, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(29): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:08:02 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Manage/Template.php [ 26 ] in file:line
2015-04-12 07:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 07:08:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/manage/base.php [ 296 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:08:13 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(296): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 296, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(26): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:08:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: body
	
		APPPATH/views/manage/base.php [ 296 ]
		291                             &lt;li class="active"&gt;Workset&lt;/li&gt;
292                         &lt;/ul&gt;
293                         &lt;div class="m-b-md"&gt;&lt;h3 class="m-b-none"&gt;Workset&lt;/h3&gt;
294                             &lt;small&gt;Welcome back, Noteman&lt;/small&gt;
295                         &lt;/div&gt;
296                         &lt;?php p($body); ?&gt;
297                     &lt;/section&gt;
298                 &lt;/section&gt;
299                 &lt;a href="&lt;?php p($siteUrl); ?&gt;/_assets/#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
300                    data-target="#nav,html"&gt;&lt;/a&gt;&lt;/section&gt;
301             &lt;aside class="bg-light lter b-l aside-md hide" id="notes"&gt;
		
					
				
					
													APPPATH/views/manage/base.php [ 296 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(24) "Undefined variable: body"
						
											
							2
							string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
						
											
							3
							integer 296
						
											
							4
							array(6) (
    "kohana_view_filename" => string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													291                             &lt;li class="active"&gt;Workset&lt;/li&gt;
292                         &lt;/ul&gt;
293                         &lt;div class="m-b-md"&gt;&lt;h3 class="m-b-none"&gt;Workset&lt;/h3&gt;
294                             &lt;small&gt;Welcome back, Noteman&lt;/small&gt;
295                         &lt;/div&gt;
296                         &lt;?php p($body); ?&gt;
297                     &lt;/section&gt;
298                 &lt;/section&gt;
299                 &lt;a href="&lt;?php p($siteUrl); ?&gt;/_assets/#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
300                    data-target="#nav,html"&gt;&lt;/a&gt;&lt;/section&gt;
301             &lt;aside class="bg-light lter b-l aside-md hide" id="notes"&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 26 ]
											
					&raquo;
					Kohana_View->__toString()
				
													21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/base');
26 		$this-&gt;content = View::factory('manage/'.$this-&gt;template);
27 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
28 		$this-&gt;response-&gt;body($view);
29 	}
30 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(5) {
    protected template => object View(2) {
        protected _file => string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
        protected _data => array(0) 
    }
    protected data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
    public body => string(9) "dashboard"
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (60)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62506"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428840493.031
				
								
					REQUEST_TIME
					integer 1428840493
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 07:08:13 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(26): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 07:08:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: siteUrl ~ APPPATH/views/manage/base.php [ 9 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:9
2015-04-12 07:08:32 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 9, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(28): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:9
2015-04-12 07:08:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: siteUrl ~ APPPATH/views/manage/base.php [ 9 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:9
2015-04-12 07:08:53 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 9, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(28): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:9
2015-04-12 07:09:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/manage/base.php [ 296 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:09:03 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(296): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 296, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(26): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#11 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:09:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view manage/
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: body
	
		APPPATH/views/manage/base.php [ 296 ]
		291                             &lt;li class="active"&gt;Workset&lt;/li&gt;
292                         &lt;/ul&gt;
293                         &lt;div class="m-b-md"&gt;&lt;h3 class="m-b-none"&gt;Workset&lt;/h3&gt;
294                             &lt;small&gt;Welcome back, Noteman&lt;/small&gt;
295                         &lt;/div&gt;
296                         &lt;?php p($body); ?&gt;
297                     &lt;/section&gt;
298                 &lt;/section&gt;
299                 &lt;a href="&lt;?php p($siteUrl); ?&gt;/_assets/#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
300                    data-target="#nav,html"&gt;&lt;/a&gt;&lt;/section&gt;
301             &lt;aside class="bg-light lter b-l aside-md hide" id="notes"&gt;
		
					
				
					
													APPPATH/views/manage/base.php [ 296 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(24) "Undefined variable: body"
						
											
							2
							string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
						
											
							3
							integer 296
						
											
							4
							array(6) (
    "kohana_view_filename" => string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
    "kohana_view_data" => array(0) 
    "siteTitle" => string(19) "简站(Simple-Site)"
    "keywords" => string(48) "免费建站、微信网站、免费微信网站"
    "siteUrl" => string(25) "http://www.simple-site.cn"
    "copyright" => string(50) "Copyright © 2015 Simple-Site. All Rights Reserved"
)
						
										
				
													291                             &lt;li class="active"&gt;Workset&lt;/li&gt;
292                         &lt;/ul&gt;
293                         &lt;div class="m-b-md"&gt;&lt;h3 class="m-b-none"&gt;Workset&lt;/h3&gt;
294                             &lt;small&gt;Welcome back, Noteman&lt;/small&gt;
295                         &lt;/div&gt;
296                         &lt;?php p($body); ?&gt;
297                     &lt;/section&gt;
298                 &lt;/section&gt;
299                 &lt;a href="&lt;?php p($siteUrl); ?&gt;/_assets/#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
300                    data-target="#nav,html"&gt;&lt;/a&gt;&lt;/section&gt;
301             &lt;aside class="bg-light lter b-l aside-md hide" id="notes"&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 62 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
						
										
				
													57 		ob_start();
58 
59 		try
60 		{
61 			// Load the view within the current scope
62 			include $kohana_view_filename;
63 		}
64 		catch (Exception $e)
65 		{
66 			// Delete the output buffer
67 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 359 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
						
											
							1
							array(0) 
						
										
				
													354 		{
355 			throw new View_Exception('You must set the file to use within your view before rendering');
356 		}
357 
358 		// Combine local and global data and capture the output
359 		return View::capture($this-&gt;_file, $this-&gt;_data);
360 	}
361 
362 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 236 ]
											
					&raquo;
					Kohana_View->render()
				
													231 	 */
232 	public function __toString()
233 	{
234 		try
235 		{
236 			return $this-&gt;render();
237 		}
238 		catch (Exception $e)
239 		{
240 			/**
241 			 * Display the exception message.

							
								
				
					
													APPPATH/classes/Controller/Manage/Template.php [ 26 ]
											
					&raquo;
					Kohana_View->__toString()
				
													21 	}
22 
23 	public function after()
24 	{
25 		$view = View::factory('manage/base');
26 		$this-&gt;body = View::factory('manage/'.$this-&gt;template);
27 		if(!empty($this-&gt;data)) foreach ($this-&gt;data as $key =&gt; $value) $view-&gt;set($key, $value);
28 		$this-&gt;response-&gt;body($view);
29 	}
30 }
							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Manage_Template->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Manage_Dashboard(5) {
    protected template => object View(2) {
        protected _file => string(84) "/media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php"
        protected _data => array(0) 
    }
    protected data => array(0) 
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(16) "manage_dashboard"
                "action" => string(5) "index"
            )
            protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(16) "Manage_Dashboard"
        protected _action => string(5) "index"
        protected _uri => string(22) "manage/dashboard/index"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
    public body => string(9) "dashboard"
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 997 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(27) "manage/dashboard(/&lt;action&gt;)"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(16) "manage_dashboard"
            "action" => string(5) "index"
        )
        protected _route_regex => string(52) "#^manage/dashboard(?:/(?P&lt;action&gt;[^/.,;?\n]++))?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(16) "Manage_Dashboard"
    protected _action => string(5) "index"
    protected _uri => string(22) "manage/dashboard/index"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													 992 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
 993 				':uri' =&gt; $this-&gt;_uri,
 994 			));
 995 		}
 996 
 997 		return $this-&gt;_client-&gt;execute($this);
 998 	}
 999 
1000 	/**
1001 	 * Returns whether this request is the initial request Kohana received.
1002 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 121 ]
											
					&raquo;
					Kohana_Request->execute()
				
													116 	/**
117 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
118 	 * If no source is specified, the URI will be automatically detected.
119 	 */
120 	echo Request::factory(TRUE, array(), FALSE)
121 		-&gt;execute()
122 		-&gt;send_headers(TRUE)
123 		-&gt;body();
124 }

							
							
	
	Environment
	
				Included files (60)
		
			
								
					DOCROOT/index.php
				
								
					MODPATH/common/function.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Manage/Dashboard.php
				
								
					APPPATH/classes/Controller/Manage/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/manage/base.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (47)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					sqlite3
				
								
					zlib
				
								
					bcmath
				
								
					ctype
				
								
					curl
				
								
					dom
				
								
					filter
				
								
					ftp
				
								
					gd
				
								
					gettext
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					mcrypt
				
								
					SPL
				
								
					session
				
								
					standard
				
								
					pcntl
				
								
					mysqlnd
				
								
					PDO
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					Phar
				
								
					posix
				
								
					Reflection
				
								
					mysqli
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					mysql
				
								
					sysvsem
				
								
					tokenizer
				
								
					xml
				
								
					xmlreader
				
								
					xmlrpc
				
								
					xmlwriter
				
								
					zip
				
								
					cgi-fcgi
				
								
					mhash
				
							
		
																$_SERVER
		
			
								
					USER
					string(3) "www"
				
								
					HOME
					string(9) "/home/www"
				
								
					FCGI_ROLE
					string(9) "RESPONDER"
				
								
					KOHANA_ENV
					string(10) "production"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_SOFTWARE
					string(11) "nginx/1.2.7"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					CONTENT_TYPE
					string(0) ""
				
								
					CONTENT_LENGTH
					string(0) ""
				
								
					SCRIPT_FILENAME
					string(67) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					REQUEST_URI
					string(23) "/manage/dashboard/index"
				
								
					DOCUMENT_URI
					string(10) "/index.php"
				
								
					DOCUMENT_ROOT
					string(57) "/media/psf/Host/Volumes/Statics/Project/simpleSite/public"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REMOTE_ADDR
					string(11) "10.211.55.2"
				
								
					REMOTE_PORT
					string(5) "62506"
				
								
					SERVER_ADDR
					string(12) "10.211.55.10"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					SERVER_NAME
					string(18) "www.simple-site.cn"
				
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(18) "www.simple-site.cn"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(121) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_ACCEPT_ENCODING
					string(19) "gzip, deflate, sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(23) "zh-CN,zh;q=0.8,en;q=0.6"
				
								
					PHP_SELF
					string(10) "/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1428840543.0391
				
								
					REQUEST_TIME
					integer 1428840543
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 07:09:03 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(145): Kohana_View->set_filename('manage/<style t...')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(30): Kohana_View->__construct('manage/<style t...', NULL)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(26): Kohana_View::factory('manage/<style t...')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#9 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php:145
2015-04-12 07:09:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/manage/base.php [ 296 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:09:34 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(296): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 296, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(27): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:296
2015-04-12 07:15:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: meta ~ APPPATH/views/manage/base.php [ 4 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:4
2015-04-12 07:15:06 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/media/psf/Host...', 4, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(62): include('/media/psf/Host...')
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(359): Kohana_View::capture('/media/psf/Host...', Array)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Manage/Template.php(29): Kohana_Response->body(Object(View))
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(87): Controller_Manage_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Dashboard))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(121): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/application/views/manage/base.php:4
2015-04-12 22:40:05 --- EMERGENCY: ErrorException [ 1 ]: Class UserTest contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (PHPUnit_Extensions_Database_TestCase::getDataSet) ~ APPPATH/tests/models/userTest.php [ 4 ] in file:line
2015-04-12 22:40:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 22:40:45 --- EMERGENCY: ErrorException [ 1 ]: Class UserTest contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (PHPUnit_Extensions_Database_TestCase::getDataSet) ~ APPPATH/tests/models/userTest.php [ 4 ] in file:line
2015-04-12 22:40:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 22:41:39 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/MySQL.php:171
2015-04-12 22:41:39 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#9 [internal function]: Kohana_Controller->execute()
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#14 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/MySQL.php:171
2015-04-12 22:42:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-04-12 22:42:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 22:43:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php:1668
2015-04-12 22:43:27 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php:1668
2015-04-12 23:05:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php:1668
2015-04-12 23:05:02 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php:1668
2015-04-12 23:08:49 --- EMERGENCY: ErrorException [ 1 ]: Class UserTest contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (PHPUnit_Extensions_Database_TestCase::getDataSet) ~ APPPATH/tests/models/userTest.php [ 4 ] in file:line
2015-04-12 23:08:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-12 23:08:57 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:08:57 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php(136): Kohana_Database_PDO->connect()
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT ssuser.u...', false, Array)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#8 [internal function]: Kohana_Controller->execute()
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#13 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:10:21 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:10:21 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php(136): Kohana_Database_PDO->connect()
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.use...', false, Array)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#8 [internal function]: Kohana_Controller->execute()
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#13 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:10:36 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:10:36 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php(136): Kohana_Database_PDO->connect()
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.use...', false, Array)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#8 [internal function]: Kohana_Controller->execute()
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#13 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:10:37 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:10:37 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php(136): Kohana_Database_PDO->connect()
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.use...', false, Array)
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#7 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#8 [internal function]: Kohana_Controller->execute()
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#13 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/PDO.php:136
2015-04-12 23:11:30 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'simple_site.users' doesn't exist [ SELECT user.username AS username FROM users AS user WHERE user.id = 1 LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php:251
2015-04-12 23:11:30 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.use...', false, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php:251
2015-04-12 23:12:07 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'simple_site.users' doesn't exist [ SELECT user.username AS username FROM users AS user WHERE user.id = 1 LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php:251
2015-04-12 23:12:07 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.use...', false, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php:251
2015-04-12 23:41:26 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'simple_site.users' doesn't exist [ SELECT user.username AS username FROM users AS user WHERE user.id = 1 LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php:251
2015-04-12 23:41:26 --- DEBUG: #0 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.use...', false, Array)
#1 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#4 /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#5 /media/psf/Host/Volumes/Statics/Project/simpleSite/application/classes/Controller/Home.php(32): Kohana_ORM::factory('user', 1)
#6 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Controller.php(84): Controller_Home->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /media/psf/Host/Volumes/Statics/Project/simpleSite/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /media/psf/Host/Volumes/Statics/Project/simpleSite/public/index.php(98): Kohana_Request->execute()
#12 {main} in /media/psf/Host/Volumes/Statics/Project/simpleSite/modules/database/classes/Kohana/Database/Query.php:251