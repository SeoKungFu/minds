<?php
	/**
	 * Elgg groups plugin language pack
	 *
	 * @package ElggGroups
	 */

	$english = array(

		'item:object:webinar' => "Gathering",
		'webinar:access_id' => 'Access',
		'webinar:add' => "Create a gathering",
		'gatherings:add' => "Create a gathering",
		'webinar:admin_pwd' => 'Admin password',
		'webinar:all' => 'All',
		'webinar:attendee:title' => "Gathering attendees",
		'webinar:default:adminPwd' => 'admin',
		'webinar:default:description' => '',
		'webinar:default:title' => "Group's gatherings %s",
		'webinar:default:userPwd' => 'user',
		'webinar:default:welcome' => 'Welcome to the gathering of %s',
		'webinar:delete' => 'Delete',
		'webinar:delete:failed' => 'Could not delete this gathering',
		'webinar:delete:success' => 'Gathering deleted',
		'webinar:description' => 'Description',
		'webinar:edit' => 'Edit',
		'webinar:edit:save' => 'Save',
		'webinar:saved' => 'Saved',
		'webinar:enable' => 'Enable the gatherings',
		'webinar:error:not_found' => 'Actually there is no gathering corresponding to this criteria',
		'webinar:everyone' => "All site gatherings",
		'webinar:group' => 'Group gatherings',
		'webinar:group:menu:new' => 'Add a gathering',
		'webinar:index'  => 'All gatherings of the group %s',
		'webinar:isDone' => "The gathering is done",
		'webinar:join' => "Join",
		'webinar:list:attendee' => "The attendees",
		'webinar:list:registered' => "The subscribes",
		'webinar:logout_url' => 'webinar URL redirection',
		'webinar:members:attendee' => 'Attendees',
		'webinar:members:more' => 'More',
		'webinar:members:registered' => 'Subscribers',
		'webinar:members:registered:title' => "Subscribers of the gathering %s",
		'webinar:members:attendee:title' => "Attendees of the gathering %s",
		'webinar:members:no' => 'Actually there is nobody',
		'webinar:menu:new' => 'Create a new gathering',
		'webinar:menu:page:all' => "All gatherings",
		'webinar:menu:page:cancel' => "Canceled gatherings",
		'webinar:menu:page:done' => "Past gatherings",
		'webinar:menu:page:running' => "Running gatherings",
		'webinar:menu:page:upcoming' => "Upcoming gatherings",
		'webinar:menu:site' => "Gatherings",
		'webinar:menu:view' => "See all group's gatherings",
		'webinar:new:user' => 'New personnal gathering',
		'webinar:new:group' => "Create a gathering for the group %s",
		'webinar:new:river' => 'New gathering in the group %s',
		'webinar:none' => 'Actually there is no gathering for this group',
		'webinar:notify:new' => '[gathering]',
		'webinar:notrunning' => "PB the webinar doesn't exist on the server",
		'webinar:owner' => "%s's gatherings",
		'webinar:profilegroup' => "Group's Gatherings",
		'webinar:registered:title' => "Gathering's subscriptions",
		'webinar:river:attendee:create' => "%s has join the gathering",
		'webinar:river:create' => "%s has created the gathering",
		'webinar:river:registered:create' => "%s has subscribe to the gathering",
		'webinar:river:start' => "The gathering %s is running !!",
		'webinar:server_salt' => 'BigBlueButton security salt (tip : run on server side the command line, bbb-conf --salt)',
		'webinar:server_url' => "BigBlueButton server's url",
		'webinar:settings' => "Erreur : demander à l'admin de vérifier les settings du plugin",
		'webinar:slot' => " Si oui, choisir un créneau libre : ",
		'webinar:slot:default' => "Add an event in the agenda ?",
		'webinar:sms' => " create a gathering named %s ",
		'webinar:start' => 'Start',
		'webinar:start:failed' => 'Gathering action start failed',
		'webinar:start:running' => 'The gathering is already running',
		'webinar:start:salterror' => 'Erreur de checksum. le security Salt est il correct ?',
		'webinar:start:timeout' => "Server BBB not responding.",
		'webinar:status' => 'The gathering status',
		'webinar:status:cancel' => "Cancel",
		'webinar:status:done' => "Done",
		'webinar:status:running' => "Running",
		'webinar:status:upcoming' => "Upcoming",
		'webinar:stop' => 'Stop',
		'webinar:stop:failed' => 'Gathering action stop failed',
		'webinar:stop:norunning' => "the gathering is not running on the server",
		'webinar:subscribe' => "Subscribe",
		'webinar:subscribe:duplicate' => "You already done this",
		'webinar:subscribe:success' => "Your subscription is registred",
		'webinar:tab' => 'Gatherings',
		'webinar:tags' => 'Keywords (comma separated)',
		'webinar:title' => 'Title',
		'webinar:title:friend:mine' => "Your friends' gatherings",
		'webinar:title:friend:user' => "Gatherings of %s's friends",
		'webinar:title:group:all' => 'All gatherings of the group %s',
		'webinar:title:site:all' => "All site's gatherings",
		'webinar:title:user:all' => "All %s's gatherings",
		'webinar:title:user:mine' => 'My gatherings',
		'webinar:unsubscribe' => "Unsubscribe",
		'webinar:unsubscribe:impossible' => "Your were not subscriber",
		'webinar:unsubscribe:success' => "Your request is done",
		'webinar:user_pwd' => 'User password',
		'webinar:webinars' => "Gatherings",
		'webinar:welcome_msg' => "Welcome message",
		'webinar:widget:description' => 'Display your gatherings',
		'webinar:widget:edit:numbertodisplay' => 'Number of gatherings to display',
		'webinar:widget:more' => 'More gatherings',
		'webinar:widget:no' => 'No gathering',
		'webinar:write_access_id' => 'Write access',
		'webinar:fee' => 'Fee ($ USD)(leave blank or enter 0 for a free gathering)',
		'webinar:join:fee' => 'Join for $%s',
		'webinar:enterprise' => 'Enterprise?',
		'webinar:enterprise:description' => 'Selecting enterprise makes sure that you have the best possible Gathering experience as we setup your own server. Please give at least 24 hours notice if you plan on hosting an Enterprise Gathering.',
		
		/**
		 * River
		 **/
		
		'river:create:object:webinar' => '%s created a gathering %s',
		'river:start:object:webinar' => '%s started the gathering %s',
		'river:attendee:object:webinar' => '%s subscribed to gathering - %s',
		'river:registered:object:webinar' => '%s joined the %s gathering',
		
		);

	add_translation("en",$english);
?>
