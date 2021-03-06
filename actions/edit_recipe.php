<?php
	/*
	# Copyright 2012 NodeSocket, LLC
	#
	# Licensed under the Apache License, Version 2.0 (the "License");
	# you may not use this file except in compliance with the License.
	# You may obtain a copy of the License at
	#
	# http://www.apache.org/licenses/LICENSE-2.0
	#
	# Unless required by applicable law or agreed to in writing, software
	# distributed under the License is distributed on an "AS IS" BASIS,
	# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	# See the License for the specific language governing permissions and
	# limitations under the License.
	*/
	
	require_once(dirname(__DIR__) . "/classes/Requires.php");
	
	Functions::check_required_parameters(array($_POST['id'], $_POST['name'], $_POST['interpreter'], $_POST['content']));
	
	MySQLQueries::edit_recipe($_POST['id'], $_POST['name'], $_POST['interpreter'], $_POST['notes'], $_POST['content']);
	
	Functions::redirect("/view-recipe/" . $_POST['id']);
?>