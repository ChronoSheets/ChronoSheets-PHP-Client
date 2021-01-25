# ChronoSheetsAPI

<div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>
    ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.
</p></div><div id='cs-extra-info'></div>


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/lachlanwp/ChronoSheets-PHP-Client.git"
    }
  ],
  "require": {
    "lachlanwp/ChronoSheets-PHP-Client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/ChronoSheetsAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new ChronoSheetsClient\Api\AggregateClientProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->aggregateClientProjectsGetAggregateClientProjects($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregateClientProjectsApi->aggregateClientProjectsGetAggregateClientProjects: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.chronosheets.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AggregateClientProjectsApi* | [**aggregateClientProjectsGetAggregateClientProjects**](docs/Api/AggregateClientProjectsApi.md#aggregateclientprojectsgetaggregateclientprojects) | **GET** /AggregateClientProjects/GetAggregateClientProjects | Get client and project information, aggregated.    Requires the &#39;SubmitTimesheets&#39; or &#39;ManageClientsAndProjects&#39; permissions.
*AggregateJobTasksApi* | [**aggregateJobTasksGetAggregateJobTasks**](docs/Api/AggregateJobTasksApi.md#aggregatejobtasksgetaggregatejobtasks) | **GET** /AggregateJobTasks/GetAggregateJobTasks | Get jobs and tasks information, aggregated.    Requires the &#39;SubmitTimesheets&#39; or &#39;ManageJobsAndTask&#39; permissions.
*ClientsApi* | [**clientsCreateClient**](docs/Api/ClientsApi.md#clientscreateclient) | **POST** /Clients/CreateClient | Create a client.    Requires the &#39;ManageClientsAndProjects&#39; permission.
*ClientsApi* | [**clientsGetClient**](docs/Api/ClientsApi.md#clientsgetclient) | **GET** /Clients/GetClient | Get a particular client.    Requires the &#39;ManageClientsAndProjects&#39; or &#39;ManageJobsAndTask&#39; permissions.
*ClientsApi* | [**clientsGetClients**](docs/Api/ClientsApi.md#clientsgetclients) | **GET** /Clients/GetClients | Get a collection of clients that are under your organisation.    Requires the &#39;ManageClientsAndProjects&#39; or &#39;ManageJobsAndTask&#39; permissions.
*ClientsApi* | [**clientsUpdateClient**](docs/Api/ClientsApi.md#clientsupdateclient) | **PUT** /Clients/UpdateClient | Update a client.    Requires the &#39;ManageClientsAndProjects&#39; permission.
*FileAttachmentsApi* | [**fileAttachmentsDeleteTimesheetFileAttachment**](docs/Api/FileAttachmentsApi.md#fileattachmentsdeletetimesheetfileattachment) | **DELETE** /FileAttachments/DeleteTimesheetFileAttachment | Delete a particular timesheet file attachment  Requires the &#39;SubmitTimesheets&#39; permission.
*FileAttachmentsApi* | [**fileAttachmentsGetFileAttachmentById**](docs/Api/FileAttachmentsApi.md#fileattachmentsgetfileattachmentbyid) | **GET** /FileAttachments/GetFileAttachmentById | Get a particular file attachment by ID.  User must own the file attachment for access.
*FileAttachmentsApi* | [**fileAttachmentsGetMyFileAttachments**](docs/Api/FileAttachmentsApi.md#fileattachmentsgetmyfileattachments) | **GET** /FileAttachments/GetMyFileAttachments | Get my file attachments.  Get files you&#39;ve attached to timesheets.
*FleetApi* | [**fleetCreateVehicle**](docs/Api/FleetApi.md#fleetcreatevehicle) | **POST** /Fleet/CreateVehicle | Create a vehicle.    Requires the &#39;ManageFleet&#39; permission.
*FleetApi* | [**fleetDeleteVehicle**](docs/Api/FleetApi.md#fleetdeletevehicle) | **DELETE** /Fleet/DeleteVehicle | Delete a vehicle from the fleet.  Requires the &#39;ManageFleet&#39; permission.
*FleetApi* | [**fleetGetVehicleById**](docs/Api/FleetApi.md#fleetgetvehiclebyid) | **GET** /Fleet/GetVehicleById | Get a particular vehicle.  Does not require any special permission.
*FleetApi* | [**fleetGetVehicles**](docs/Api/FleetApi.md#fleetgetvehicles) | **GET** /Fleet/GetVehicles | Get a collection of vehicles that are under your organisation.    Does not require any special permission.
*FleetApi* | [**fleetUpdateVehicle**](docs/Api/FleetApi.md#fleetupdatevehicle) | **PUT** /Fleet/UpdateVehicle | Update a vehicle.    Requires the &#39;ManageFleet&#39; permission.
*GeoFencingApi* | [**geoFencingCreateGeofence**](docs/Api/GeoFencingApi.md#geofencingcreategeofence) | **POST** /GeoFencing/CreateGeofence | Create a geofencing with rules to be used for clock on/off automation.  Requires the &#39;ManageGeofencing&#39; permission.
*GeoFencingApi* | [**geoFencingDeleteGeofence**](docs/Api/GeoFencingApi.md#geofencingdeletegeofence) | **DELETE** /GeoFencing/DeleteGeofence | Deletes a geofence.  Requires the &#39;ManageGeofencing&#39; permission.
*GeoFencingApi* | [**geoFencingGetGeofenceById**](docs/Api/GeoFencingApi.md#geofencinggetgeofencebyid) | **GET** /GeoFencing/GetGeofenceById | Get a geofence by ID  Requires the &#39;SubmitTimesheets&#39; permission.
*GeoFencingApi* | [**geoFencingGetGeofences**](docs/Api/GeoFencingApi.md#geofencinggetgeofences) | **GET** /GeoFencing/GetGeofences | Get geofences belonging to your organisation  Requires the &#39;SubmitTimesheets&#39; permission.
*GeoFencingApi* | [**geoFencingGetGeofencesBasicInfo**](docs/Api/GeoFencingApi.md#geofencinggetgeofencesbasicinfo) | **GET** /GeoFencing/GetGeofencesBasicInfo | Gets a list of all geofences in your organisation, including just the name and ID.
*GeoFencingApi* | [**geoFencingUpdateGeofence**](docs/Api/GeoFencingApi.md#geofencingupdategeofence) | **PUT** /GeoFencing/UpdateGeofence | Updates a geofencing with rules to be used for clock on/off automation.  Requires the &#39;ManageGeofencing&#39; permission.
*JobCodesApi* | [**jobCodesCreateJobCode**](docs/Api/JobCodesApi.md#jobcodescreatejobcode) | **POST** /JobCodes/CreateJobCode | Create a job code.    Requires the &#39;ManageJobsAndTask&#39; permission.
*JobCodesApi* | [**jobCodesDeleteJobCode**](docs/Api/JobCodesApi.md#jobcodesdeletejobcode) | **DELETE** /JobCodes/DeleteJobCode | Delete a job code.    Requires the &#39;ManageJobsAndTask&#39; permission.
*JobCodesApi* | [**jobCodesGetJobCodeById**](docs/Api/JobCodesApi.md#jobcodesgetjobcodebyid) | **GET** /JobCodes/GetJobCodeById | Get a particular job code by job code id.    Requires &#39;SubmitTimesheets&#39; or &#39;ManageJobsAndTasks&#39; permissions.
*JobCodesApi* | [**jobCodesGetJobCodes**](docs/Api/JobCodesApi.md#jobcodesgetjobcodes) | **GET** /JobCodes/GetJobCodes | Get job codes for your organisation.    Requires &#39;SubmitTimesheets&#39; or &#39;ManageJobsAndTasks&#39; permissions.
*JobCodesApi* | [**jobCodesUpdateJobCode**](docs/Api/JobCodesApi.md#jobcodesupdatejobcode) | **PUT** /JobCodes/UpdateJobCode | Update a job code.    Requires the &#39;ManageJobsAndTask&#39; permission.
*OrganisationApi* | [**organisationGetOrganisation**](docs/Api/OrganisationApi.md#organisationgetorganisation) | **GET** /Organisation/GetOrganisation | Get your organisation.    Requires &#39;OrganisationAdmin&#39; permission.
*OrganisationApi* | [**organisationUpdateOrganisation**](docs/Api/OrganisationApi.md#organisationupdateorganisation) | **PUT** /Organisation/UpdateOrganisation | Update an organisation.    Requires &#39;OrganisationAdmin&#39; permission.
*OrganisationGroupUsersApi* | [**organisationGroupUsersGetOrganisationGroupUsers**](docs/Api/OrganisationGroupUsersApi.md#organisationgroupusersgetorganisationgroupusers) | **GET** /OrganisationGroupUsers/GetOrganisationGroupUsers | Get a collection of organisation group users that belong to an organisation group.    Requires the &#39;ManageOrganisationGroups&#39; or &#39;ManageOrganisationUsers&#39; permissions.
*OrganisationGroupUsersApi* | [**organisationGroupUsersUpdateOrganisationGroupUsers**](docs/Api/OrganisationGroupUsersApi.md#organisationgroupusersupdateorganisationgroupusers) | **PUT** /OrganisationGroupUsers/UpdateOrganisationGroupUsers | Set the users who belong to an organisation group.    Requires the &#39;ManageOrganisationGroups&#39; permissions.
*OrganisationGroupsApi* | [**organisationGroupsCreateOrganisationGroup**](docs/Api/OrganisationGroupsApi.md#organisationgroupscreateorganisationgroup) | **POST** /OrganisationGroups/CreateOrganisationGroup | Create an organisation group.    Requires the &#39;ManageOrganisationGroups&#39; permissions.
*OrganisationGroupsApi* | [**organisationGroupsDeleteOrganisationGroup**](docs/Api/OrganisationGroupsApi.md#organisationgroupsdeleteorganisationgroup) | **DELETE** /OrganisationGroups/DeleteOrganisationGroup | 
*OrganisationGroupsApi* | [**organisationGroupsGetOrganisationGroup**](docs/Api/OrganisationGroupsApi.md#organisationgroupsgetorganisationgroup) | **GET** /OrganisationGroups/GetOrganisationGroup | Get a particular organisation group.    Requires the &#39;ManageOrganisationGroups&#39;, &#39;ManageJobsAndTask&#39;, &#39;ManageClientsAndProjects&#39; or &#39;ManageOrganisationUsers&#39; permissions.
*OrganisationGroupsApi* | [**organisationGroupsGetOrganisationGroups**](docs/Api/OrganisationGroupsApi.md#organisationgroupsgetorganisationgroups) | **GET** /OrganisationGroups/GetOrganisationGroups | Get a collection of organisation groups that are under your organisation.    Requires the &#39;ManageOrganisationGroups&#39;, &#39;ManageJobsAndTask&#39;, &#39;ManageClientsAndProjects&#39; or &#39;ManageOrganisationUsers&#39; permissions.
*OrganisationGroupsApi* | [**organisationGroupsGetOrganisationGroupsForJob**](docs/Api/OrganisationGroupsApi.md#organisationgroupsgetorganisationgroupsforjob) | **GET** /OrganisationGroups/GetOrganisationGroupsForJob | Get org groups for a particular job.    Requires the &#39;ManageOrganisationGroups&#39;, &#39;ManageJobsAndTask&#39;, &#39;ManageClientsAndProjects&#39; or &#39;ManageOrganisationUsers&#39; permissions.
*OrganisationGroupsApi* | [**organisationGroupsGetOrganisationGroupsForVehicle**](docs/Api/OrganisationGroupsApi.md#organisationgroupsgetorganisationgroupsforvehicle) | **GET** /OrganisationGroups/GetOrganisationGroupsForVehicle | Get org groups for a particular vehicle.    Requires the &#39;ManageOrganisationGroups&#39;, &#39;ManageFleet&#39; or &#39;ManageOrganisationUsers&#39; permissions.
*OrganisationGroupsApi* | [**organisationGroupsUpdateOrganisationGroup**](docs/Api/OrganisationGroupsApi.md#organisationgroupsupdateorganisationgroup) | **PUT** /OrganisationGroups/UpdateOrganisationGroup | Update an organisation group.    Requires the &#39;ManageOrganisationGroups&#39; permissions.
*ProjectsApi* | [**projectsCreateProject**](docs/Api/ProjectsApi.md#projectscreateproject) | **POST** /Projects/CreateProject | Create a project.    Requires the &#39;ManageClientsAndProjects&#39; permission.
*ProjectsApi* | [**projectsGetProjectById**](docs/Api/ProjectsApi.md#projectsgetprojectbyid) | **GET** /Projects/GetProjectById | Get a project by its Id.    Requires the &#39;ManageClientsAndProjects&#39; or &#39;ManageJobsAndTask&#39; permissions.
*ProjectsApi* | [**projectsGetProjectsForClient**](docs/Api/ProjectsApi.md#projectsgetprojectsforclient) | **GET** /Projects/GetProjectsForClient | Get projects for a particular client.    Requires the &#39;ManageClientsAndProjects&#39; or &#39;ManageJobsAndTask&#39; permissions.
*ProjectsApi* | [**projectsUpdateProject**](docs/Api/ProjectsApi.md#projectsupdateproject) | **PUT** /Projects/UpdateProject | Update a project.    Requires the &#39;ManageClientsAndProjects&#39; permission.
*ReportsApi* | [**reportsGetAllChartsDataAdmin**](docs/Api/ReportsApi.md#reportsgetallchartsdataadmin) | **GET** /Reports/GetAllChartsDataAdmin | Get Consolidated Admin Reports Data (Jobs, Tasks, Clients and Projects).  These are the organisation wide reports, with data from potentially all employees.    Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsGetAllChartsDataUser**](docs/Api/ReportsApi.md#reportsgetallchartsdatauser) | **GET** /Reports/GetAllChartsDataUser | Get Consolidated User Reports Data (Jobs, Tasks, Clients and Projects).  These are the user&#39;s own reports.    Requires the &#39;ViewOwnReports&#39; permission.
*ReportsApi* | [**reportsGetFleetSummaryAdmin**](docs/Api/ReportsApi.md#reportsgetfleetsummaryadmin) | **GET** /Reports/GetFleetSummaryAdmin | Gets a summary report, which includes total distance travelled and total running costs, for vehicles within your organisation  Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsGetOrgTripById**](docs/Api/ReportsApi.md#reportsgetorgtripbyid) | **GET** /Reports/GetOrgTripById | Get trip by Id, for reporting purposes.    Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsGetOrganisationTimesheetFileAttachments**](docs/Api/ReportsApi.md#reportsgetorganisationtimesheetfileattachments) | **GET** /Reports/GetOrganisationTimesheetFileAttachments | Reports on Organisation timesheet file attachments (files uploaded and attached to timesheet records)  Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsGetOrganisationTranscripts**](docs/Api/ReportsApi.md#reportsgetorganisationtranscripts) | **GET** /Reports/GetOrganisationTranscripts | Reports on Organisation transcripts (When an audio file is attached, it will be automatically transcribed, these are the transcriptions)    Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsGetOrganisationTrips**](docs/Api/ReportsApi.md#reportsgetorganisationtrips) | **GET** /Reports/GetOrganisationTrips | Reports on Organisation trips (GPS tracking from whole organisation).    Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsGetRawDataAdmin**](docs/Api/ReportsApi.md#reportsgetrawdataadmin) | **GET** /Reports/GetRawDataAdmin | Get Timesheets Raw Data.  This data details each timesheet record.  These are the organisation wide timesheet records, with data from potentially all employees.    Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsProjectCostingsAdmin**](docs/Api/ReportsApi.md#reportsprojectcostingsadmin) | **GET** /Reports/ProjectCostingsAdmin | Gets project cost estimations VS actual cost for date range and users.    Requires the &#39;ReportAdmin&#39; permission.
*ReportsApi* | [**reportsUserJobsOverTime**](docs/Api/ReportsApi.md#reportsuserjobsovertime) | **GET** /Reports/UserJobsOverTime | Timeseries jobs data for the logged in user.    Requires the &#39;ViewOwnReports&#39; or &#39;SubmitTimesheets&#39;.
*TasksApi* | [**tasksCreateTask**](docs/Api/TasksApi.md#taskscreatetask) | **POST** /Tasks/CreateTask | Create a task.    Requires the &#39;ManageJobsAndTask&#39; permission.
*TasksApi* | [**tasksDeleteTask**](docs/Api/TasksApi.md#tasksdeletetask) | **DELETE** /Tasks/DeleteTask | Delete a task.    Requires the &#39;ManageJobsAndTask&#39; permission.
*TasksApi* | [**tasksGetTaskById**](docs/Api/TasksApi.md#tasksgettaskbyid) | **GET** /Tasks/GetTaskById | Get a particular task by Id.   Requires the &#39;SubmitTimesheets&#39; or &#39;ManageJobsAndTask&#39; permissions.
*TasksApi* | [**tasksGetTasks**](docs/Api/TasksApi.md#tasksgettasks) | **GET** /Tasks/GetTasks | Get tasks in your organisation.   Requires the &#39;SubmitTimesheets&#39; or &#39;ManageJobsAndTask&#39; permissions.
*TasksApi* | [**tasksGetTasksForJob**](docs/Api/TasksApi.md#tasksgettasksforjob) | **GET** /Tasks/GetTasksForJob | Get a collection of tasks for a particular Job, specified by JobId.    Requires the &#39;SubmitTimesheets&#39; or &#39;ManageJobsAndTask&#39; permissions.
*TasksApi* | [**tasksUpdateTask**](docs/Api/TasksApi.md#tasksupdatetask) | **PUT** /Tasks/UpdateTask | Update a task.    Requires the &#39;ManageJobsAndTask&#39; permission.
*TimesheetAutomationApi* | [**timesheetAutomationCreateAutomationStep**](docs/Api/TimesheetAutomationApi.md#timesheetautomationcreateautomationstep) | **POST** /TimesheetAutomation/CreateAutomationStep | Creates an automation step.  Timesheet automation is determined by looking at steps taken by the user.  Create a step to log some automation action, such as entering a geofence or tapping on an NFC badge.  Requires the &#39;SubmitTimesheets&#39; permission.
*TimesheetAutomationApi* | [**timesheetAutomationGetTimesheetAutomationAuditTrail**](docs/Api/TimesheetAutomationApi.md#timesheetautomationgettimesheetautomationaudittrail) | **GET** /TimesheetAutomation/GetTimesheetAutomationAuditTrail | Retrieve the timesheet automation / alerts for geofences activities or NFC tap on/off.  Requires the &#39;ManageGeofencing&#39; permission.
*TimesheetsApi* | [**timesheetsCreateSingleTimesheet**](docs/Api/TimesheetsApi.md#timesheetscreatesingletimesheet) | **POST** /Timesheets/CreateSingleTimesheet | Inserts a single timesheet record.    Requires the &#39;SubmitTimesheets&#39; permission.
*TimesheetsApi* | [**timesheetsDeleteTimesheet**](docs/Api/TimesheetsApi.md#timesheetsdeletetimesheet) | **DELETE** /Timesheets/DeleteTimesheet | Delete a timesheet.    Requires the &#39;SubmitTimesheets&#39; permission.
*TimesheetsApi* | [**timesheetsGetTimesheets**](docs/Api/TimesheetsApi.md#timesheetsgettimesheets) | **GET** /Timesheets/GetTimesheets | Get timesheets between start and end dates.  Note: the date range cannot exceed 24 hours.  This method is generally used to get timesheets for a particular day.    Requires the &#39;SubmitTimesheets&#39; permission.
*TimesheetsApi* | [**timesheetsUpdateTimesheets**](docs/Api/TimesheetsApi.md#timesheetsupdatetimesheets) | **PUT** /Timesheets/UpdateTimesheets | Batch update timesheets.    Requires the &#39;SubmitTimesheets&#39; permission.
*TranscriptsApi* | [**transcriptsGetMyTranscript**](docs/Api/TranscriptsApi.md#transcriptsgetmytranscript) | **GET** /Transcripts/GetMyTranscript | Get an audio to text transcript for a particular audio file attachment
*TranscriptsApi* | [**transcriptsGetMyTranscripts**](docs/Api/TranscriptsApi.md#transcriptsgetmytranscripts) | **GET** /Transcripts/GetMyTranscripts | Get my file transcripts.  Get audio to text transcripts that you&#39;ve created.
*TripsApi* | [**tripsCreateTrip**](docs/Api/TripsApi.md#tripscreatetrip) | **POST** /Trips/CreateTrip | Create a new trip.  Important: create a timesheet record before calling this, passing in the new timesheet record id as a reference.    Requires the &#39;SubmitTimesheets&#39; permission.
*TripsApi* | [**tripsGetMyTripById**](docs/Api/TripsApi.md#tripsgetmytripbyid) | **GET** /Trips/GetMyTripById | Get trip by Id.    Requires the &#39;ViewMyTrips&#39; permission.
*TripsApi* | [**tripsGetMyTrips**](docs/Api/TripsApi.md#tripsgetmytrips) | **GET** /Trips/GetMyTrips | Get my trips.  Get the GPS trips you&#39;ve recorded and submitted.    Requires the &#39;ViewMyTrips&#39; permission.
*UserJobFavouritesApi* | [**userJobFavouritesCreateJobFavourite**](docs/Api/UserJobFavouritesApi.md#userjobfavouritescreatejobfavourite) | **POST** /UserJobFavourites/CreateJobFavourite | Create a job favourite.    Requires the &#39;SubmitTimesheets&#39; permission.
*UserJobFavouritesApi* | [**userJobFavouritesDeleteJobFavourite**](docs/Api/UserJobFavouritesApi.md#userjobfavouritesdeletejobfavourite) | **DELETE** /UserJobFavourites/DeleteJobFavourite | Delete a job favourite.    Requires the &#39;SubmitTimesheets&#39; permission.
*UserJobFavouritesApi* | [**userJobFavouritesGetJobFavourites**](docs/Api/UserJobFavouritesApi.md#userjobfavouritesgetjobfavourites) | **GET** /UserJobFavourites/GetJobFavourites | Get your job favourites.    Requires the &#39;SubmitTimesheets&#39; permission.
*UserPayRatesApi* | [**userPayRatesCreatePayRate**](docs/Api/UserPayRatesApi.md#userpayratescreatepayrate) | **POST** /UserPayRates/CreatePayRate | Create a new pay rate for a particular user, archiving the previous pay rate.    Requires the &#39;ManageOrganisationUsers&#39; permission.
*UserPayRatesApi* | [**userPayRatesGetPayRates**](docs/Api/UserPayRatesApi.md#userpayratesgetpayrates) | **GET** /UserPayRates/GetPayRates | Get a collection of pay rates for a particular user, specified by user id.    Requires the &#39;ManageOrganisationUsers&#39; permission.
*UserProfileApi* | [**userProfileDoLogin**](docs/Api/UserProfileApi.md#userprofiledologin) | **PUT** /UserProfile/DoLogin | Login to your ChronoSheets account and obtain an Auth Token which you can use for other ChronoSheets API methods.    Does not require any special permissions.
*UserProfileApi* | [**userProfileDoLogout**](docs/Api/UserProfileApi.md#userprofiledologout) | **DELETE** /UserProfile/DoLogout | Logout of your ChronoSheets account.  This method ends and deletes your active session.    Does not require any special permissions.
*UserProfileApi* | [**userProfileGetMyProfile**](docs/Api/UserProfileApi.md#userprofilegetmyprofile) | **GET** /UserProfile/GetMyProfile | Get your own profile.  Use this method to obtain detailed information about your ChronoSheets user profile.    Does not require any special permissions.
*UserProfileApi* | [**userProfileKeepSessionAlive**](docs/Api/UserProfileApi.md#userprofilekeepsessionalive) | **GET** /UserProfile/KeepSessionAlive | Keep a session alive.  Use this method to keep a session active.  You could use this to &#39;ping&#39; ChronoSheets every &#39;x&#39; minutes to make sure your Auth Token will keep working.    Does not require any special permissions.
*UserProfileApi* | [**userProfileUpdateMyProfile**](docs/Api/UserProfileApi.md#userprofileupdatemyprofile) | **PUT** /UserProfile/UpdateMyProfile | Update your own profile.  Use this method to update your profile information or update/change your password.    Does not require any special permissions.
*UsersApi* | [**usersCreateTimesheetUser**](docs/Api/UsersApi.md#userscreatetimesheetuser) | **POST** /Users/CreateTimesheetUser | Create a user account in your organisation.  Requires the &#39;ManageOrganisationUsers&#39; permission.
*UsersApi* | [**usersGetTimesheetUser**](docs/Api/UsersApi.md#usersgettimesheetuser) | **GET** /Users/GetTimesheetUser | Get a particular user in your organisation.  Requires the &#39;ManageOrganisationUsers&#39; or &#39;ManageOrganisationGroups&#39; permissions.
*UsersApi* | [**usersGetTimesheetUsers**](docs/Api/UsersApi.md#usersgettimesheetusers) | **GET** /Users/GetTimesheetUsers | Get users accounts in your organisation.  Requires the &#39;ManageOrganisationUsers&#39; or &#39;ManageOrganisationGroups&#39; permissions.
*UsersApi* | [**usersUpdateTimesheetUser**](docs/Api/UsersApi.md#usersupdatetimesheetuser) | **PUT** /Users/UpdateTimesheetUser | Update a user account.  Requires the &#39;ManageOrganisationUsers&#39; permission.
*UsualHoursApi* | [**usualHoursGetUsualHours**](docs/Api/UsualHoursApi.md#usualhoursgetusualhours) | **GET** /UsualHours/GetUsualHours | Get usual hours (rostered hours) for an employee.  Requires the &#39;ManageOrganisationUsers&#39; permission.
*UsualHoursApi* | [**usualHoursSetUsualHours**](docs/Api/UsualHoursApi.md#usualhourssetusualhours) | **PUT** /UsualHours/SetUsualHours | Set usual hours (rostered hours) for an employee.  Requires the &#39;ManageOrganisationUsers&#39; permission.

## Models

- [AggregateClient](docs/Model/AggregateClient.md)
- [AggregateJobCode](docs/Model/AggregateJobCode.md)
- [AggregateJobTask](docs/Model/AggregateJobTask.md)
- [AggregateProject](docs/Model/AggregateProject.md)
- [ApiResponseBoolean](docs/Model/ApiResponseBoolean.md)
- [ApiResponseClient](docs/Model/ApiResponseClient.md)
- [ApiResponseCombinedReportsData](docs/Model/ApiResponseCombinedReportsData.md)
- [ApiResponseDoLoginResponse](docs/Model/ApiResponseDoLoginResponse.md)
- [ApiResponseFleetVehicle](docs/Model/ApiResponseFleetVehicle.md)
- [ApiResponseForPaginatedListBasicGeofence](docs/Model/ApiResponseForPaginatedListBasicGeofence.md)
- [ApiResponseForPaginatedListExtendedGeofence](docs/Model/ApiResponseForPaginatedListExtendedGeofence.md)
- [ApiResponseForPaginatedListOrgReportTimesheetFileAttachment](docs/Model/ApiResponseForPaginatedListOrgReportTimesheetFileAttachment.md)
- [ApiResponseForPaginatedListOrgReportTranscript](docs/Model/ApiResponseForPaginatedListOrgReportTranscript.md)
- [ApiResponseForPaginatedListOrgReportTrip](docs/Model/ApiResponseForPaginatedListOrgReportTrip.md)
- [ApiResponseForPaginatedListRawReportItem](docs/Model/ApiResponseForPaginatedListRawReportItem.md)
- [ApiResponseForPaginatedListTimesheetAutomationWithOrgAndGeofence](docs/Model/ApiResponseForPaginatedListTimesheetAutomationWithOrgAndGeofence.md)
- [ApiResponseForPaginatedListTimesheetFileAttachment](docs/Model/ApiResponseForPaginatedListTimesheetFileAttachment.md)
- [ApiResponseForPaginatedListTrip](docs/Model/ApiResponseForPaginatedListTrip.md)
- [ApiResponseGeofence](docs/Model/ApiResponseGeofence.md)
- [ApiResponseInsertUserResponse](docs/Model/ApiResponseInsertUserResponse.md)
- [ApiResponseInt32](docs/Model/ApiResponseInt32.md)
- [ApiResponseJobCode](docs/Model/ApiResponseJobCode.md)
- [ApiResponseListAggregateClient](docs/Model/ApiResponseListAggregateClient.md)
- [ApiResponseListAggregateJobCode](docs/Model/ApiResponseListAggregateJobCode.md)
- [ApiResponseListClient](docs/Model/ApiResponseListClient.md)
- [ApiResponseListFleetSummaryReportItem](docs/Model/ApiResponseListFleetSummaryReportItem.md)
- [ApiResponseListFleetVehicle](docs/Model/ApiResponseListFleetVehicle.md)
- [ApiResponseListInt32](docs/Model/ApiResponseListInt32.md)
- [ApiResponseListJobCode](docs/Model/ApiResponseListJobCode.md)
- [ApiResponseListJobSeriesReportItem](docs/Model/ApiResponseListJobSeriesReportItem.md)
- [ApiResponseListOrganisationGroup](docs/Model/ApiResponseListOrganisationGroup.md)
- [ApiResponseListProject](docs/Model/ApiResponseListProject.md)
- [ApiResponseListProjectCostingReportItem](docs/Model/ApiResponseListProjectCostingReportItem.md)
- [ApiResponseListTimesheet](docs/Model/ApiResponseListTimesheet.md)
- [ApiResponseListTimesheetTask](docs/Model/ApiResponseListTimesheetTask.md)
- [ApiResponseListUserForManagement](docs/Model/ApiResponseListUserForManagement.md)
- [ApiResponseListUserHourlyRate](docs/Model/ApiResponseListUserHourlyRate.md)
- [ApiResponseListUserJobFavourite](docs/Model/ApiResponseListUserJobFavourite.md)
- [ApiResponseListUsualHoursDay](docs/Model/ApiResponseListUsualHoursDay.md)
- [ApiResponseOrganisation](docs/Model/ApiResponseOrganisation.md)
- [ApiResponseOrganisationGroup](docs/Model/ApiResponseOrganisationGroup.md)
- [ApiResponseProject](docs/Model/ApiResponseProject.md)
- [ApiResponseTimesheetFileAttachment](docs/Model/ApiResponseTimesheetFileAttachment.md)
- [ApiResponseTimesheetTask](docs/Model/ApiResponseTimesheetTask.md)
- [ApiResponseTranscription](docs/Model/ApiResponseTranscription.md)
- [ApiResponseTrip](docs/Model/ApiResponseTrip.md)
- [ApiResponseUpdateOrganisationResponse](docs/Model/ApiResponseUpdateOrganisationResponse.md)
- [ApiResponseUpdateProfileResponse](docs/Model/ApiResponseUpdateProfileResponse.md)
- [ApiResponseUpdateUserResponse](docs/Model/ApiResponseUpdateUserResponse.md)
- [ApiResponseUserForManagement](docs/Model/ApiResponseUserForManagement.md)
- [ApiResponseUserProfile](docs/Model/ApiResponseUserProfile.md)
- [BasicCoordinate](docs/Model/BasicCoordinate.md)
- [BasicGeofence](docs/Model/BasicGeofence.md)
- [BatchUpdateTimesheetRequest](docs/Model/BatchUpdateTimesheetRequest.md)
- [Client](docs/Model/Client.md)
- [ClientSeriesReportItem](docs/Model/ClientSeriesReportItem.md)
- [ClientSideUser](docs/Model/ClientSideUser.md)
- [ClientTotalsReportItem](docs/Model/ClientTotalsReportItem.md)
- [CombinedReportsData](docs/Model/CombinedReportsData.md)
- [CreateAutomationStepRequest](docs/Model/CreateAutomationStepRequest.md)
- [CreateGeoFenceRequest](docs/Model/CreateGeoFenceRequest.md)
- [CreateTripRequest](docs/Model/CreateTripRequest.md)
- [DoLoginRequest](docs/Model/DoLoginRequest.md)
- [DoLoginResponse](docs/Model/DoLoginResponse.md)
- [ExtendedGeofence](docs/Model/ExtendedGeofence.md)
- [FleetSummaryReportItem](docs/Model/FleetSummaryReportItem.md)
- [FleetVehicle](docs/Model/FleetVehicle.md)
- [Geofence](docs/Model/Geofence.md)
- [InsertClientRequest](docs/Model/InsertClientRequest.md)
- [InsertJobCodeRequest](docs/Model/InsertJobCodeRequest.md)
- [InsertOrganisationGroupRequest](docs/Model/InsertOrganisationGroupRequest.md)
- [InsertProjectRequest](docs/Model/InsertProjectRequest.md)
- [InsertTaskRequest](docs/Model/InsertTaskRequest.md)
- [InsertUserHourlyRateRequest](docs/Model/InsertUserHourlyRateRequest.md)
- [InsertUserJobFavouriteRequest](docs/Model/InsertUserJobFavouriteRequest.md)
- [InsertUserRequest](docs/Model/InsertUserRequest.md)
- [InsertUserResponse](docs/Model/InsertUserResponse.md)
- [InsertVehicleRequest](docs/Model/InsertVehicleRequest.md)
- [JobCode](docs/Model/JobCode.md)
- [JobSeriesReportItem](docs/Model/JobSeriesReportItem.md)
- [JobTotalsReportItem](docs/Model/JobTotalsReportItem.md)
- [OrgReportTimesheetFileAttachment](docs/Model/OrgReportTimesheetFileAttachment.md)
- [OrgReportTranscript](docs/Model/OrgReportTranscript.md)
- [OrgReportTrip](docs/Model/OrgReportTrip.md)
- [Organisation](docs/Model/Organisation.md)
- [OrganisationGroup](docs/Model/OrganisationGroup.md)
- [OrganisationPricingPlan](docs/Model/OrganisationPricingPlan.md)
- [Project](docs/Model/Project.md)
- [ProjectCostingReportItem](docs/Model/ProjectCostingReportItem.md)
- [ProjectSeriesReportItem](docs/Model/ProjectSeriesReportItem.md)
- [ProjectTotalsReportItem](docs/Model/ProjectTotalsReportItem.md)
- [RawReportItem](docs/Model/RawReportItem.md)
- [SaveClientRequest](docs/Model/SaveClientRequest.md)
- [SaveOrganisationGroupRequest](docs/Model/SaveOrganisationGroupRequest.md)
- [SaveVehicleRequest](docs/Model/SaveVehicleRequest.md)
- [SetOrganisationGroupUsersRequest](docs/Model/SetOrganisationGroupUsersRequest.md)
- [SetUsualHoursRequest](docs/Model/SetUsualHoursRequest.md)
- [TaskSeriesReportItem](docs/Model/TaskSeriesReportItem.md)
- [TaskTotalsReportItem](docs/Model/TaskTotalsReportItem.md)
- [TimeSlot](docs/Model/TimeSlot.md)
- [Timesheet](docs/Model/Timesheet.md)
- [TimesheetAutomationWithOrgAndGeofence](docs/Model/TimesheetAutomationWithOrgAndGeofence.md)
- [TimesheetFileAttachment](docs/Model/TimesheetFileAttachment.md)
- [TimesheetTask](docs/Model/TimesheetTask.md)
- [Transcription](docs/Model/Transcription.md)
- [Trip](docs/Model/Trip.md)
- [TripCoordinate](docs/Model/TripCoordinate.md)
- [UpdateGeoFenceRequest](docs/Model/UpdateGeoFenceRequest.md)
- [UpdateJobCodeRequest](docs/Model/UpdateJobCodeRequest.md)
- [UpdateMyProfileRequest](docs/Model/UpdateMyProfileRequest.md)
- [UpdateOrganisationRequest](docs/Model/UpdateOrganisationRequest.md)
- [UpdateOrganisationResponse](docs/Model/UpdateOrganisationResponse.md)
- [UpdateProfileResponse](docs/Model/UpdateProfileResponse.md)
- [UpdateProjectRequest](docs/Model/UpdateProjectRequest.md)
- [UpdateTaskRequest](docs/Model/UpdateTaskRequest.md)
- [UpdateUserRequest](docs/Model/UpdateUserRequest.md)
- [UpdateUserResponse](docs/Model/UpdateUserResponse.md)
- [UserForManagement](docs/Model/UserForManagement.md)
- [UserHourlyRate](docs/Model/UserHourlyRate.md)
- [UserJobFavourite](docs/Model/UserJobFavourite.md)
- [UserProfile](docs/Model/UserProfile.md)
- [UsualHoursDay](docs/Model/UsualHoursDay.md)

## Authorization

### x-chronosheets-auth

- **Type**: API key
- **API key parameter name**: x-chronosheets-auth
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
