# moodle-cleanupusers_manualacc_checker
Subplugin for moodle-tool_cleanupusers for manual accounts

This subpugin requires the moodle toot tool_cleanupusers. This Tool can be found here: 

https://github.com/eLearning-TUDarmstadt/moodle-tool_cleanupusers

The subplugin shoud be paces unter:  admin/tool/cleanupusers/userstatus.

This subplugin is a compelte copy of the subplugin "timechecker", and suspends and deletes accounts with auth_type = 'manual'. 

# Timechecker

The timechecker plugin suspends and deletes users depending on the last access of the user to the platform. The site administrator can define custom time spans, as a default 90 days have to pass without a user logging in, until the user is suspended and 365 days until the user is deleted. Currently, users that are manually suspended and did not log in for the defined time are also deleted.
