statusboard
===========

This panel for Panic’s ‘Status Board‘ iPad app quickly shows you the status of Apple’s various services (iCloud, Services and Stores). It’s very handy for checking at a glance if any of Apple’s cloud services are having issues.

You'll need the 'Status Board' iPad app from Panic (http://panic.com/statusboard/) and a webserver or a Dropbox account to host these files.

There are two versions of the panel: Summary and Detailed. The ‘Summary’ panel has one indicator for each of the 3 major services (Services, Stores & iCloud). The ‘Detailed’ panel has an indicator for each individual service.

### Summary Panel
This panel shows the status of Services, Stores and iCloud

### Detailed Panel
This panel will show the status of the following services:

__Services__
- Apple ID
- Game Center
- Maps
- iMessage
- iChat
- FaceTime
- Dictation
- Siri

__Stores__
- App Store
- iTunes Store
- Apple Online Store
- Mac App Store
- iBooks Store
- Photo Print Products

__iCloud__
- Mail
- Photos
- iTunes in the Cloud
- Contacts
- Documents in the Cloud
- iTunes Match
- Calendar
- Backup
- iCloud Keychain
- Reminders
- Find My iPhone, iPad, iPod touch, and Mac
- Web Apps (iCloud.com)
- Bookmarks & iCloud Tabs
- Find My Friends
- Account & Sign In
- Notes
- Back to My Mac
- Storage Upgrades
- iWork for iCloud beta
- iMovie Theater


## Installation

Simple install the contents of either 'detailed' or 'summary' somewhere accessible (webserver or DropBox folder).

Then add a DIY panel to StatusBoard (go into Edit Mode by tapping the 'gear' icon in the upper left of the iPad's screen. Drag a DIY panel onto the board).

Then tap the DIY panel and select either DropBox or URL under 'Data Source'. If you're using a webserver, then enter the URL to the 'index.html' file that you uploaded. For DropBox, select the appropriate folder.

![screenshot](https://github.com/salConigliaro/statusboard/raw/statusBoardThumb.jpg)