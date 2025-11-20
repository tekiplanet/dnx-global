# DNX Global Photography & Videography Platform - Complete Page Structure

**Project**: DNX Global Booking Platform  
**Developer**: TekiPlanet IT Solutions  
**Document Version**: 1.0  
**Last Updated**: November 6, 2025

---

## Table of Contents
1. [Public/Guest Pages](#publicguest-pages)
2. [Authentication Pages](#authentication-pages)
3. [User Portal Pages](#user-portal-pages)
4. [Admin Portal Pages](#admin-portal-pages)
5. [Utility Pages](#utility-pages)
6. [Total Page Count Summary](#total-page-count-summary)

---

## PUBLIC/GUEST PAGES
*No authentication required - Accessible to all visitors*

### 1. Landing/Marketing Pages

#### 1.1 Home Page
- **Route**: `/`
- **Page Components**:
  - Hero section with primary CTA (Book Now button)
  - Service highlights (Photography, Videography, 360° Booth)
  - Featured packages showcase
  - Customer testimonials carousel
  - Partners/clients logo section
  - Contact information footer
- **Key Actions**: Navigate to booking, view services, submit contact inquiry

#### 1.2 About Us Page
- **Route**: `/about`
- **Page Components**:
  - Company overview section
  - Mission & vision statement
  - Team member profiles with professional photos
  - Behind-the-scenes gallery/video showcase
  - Company history timeline
  - Core values section
- **Key Actions**: View team details, navigate to contact page

#### 1.3 Gallery/Portfolio Page
- **Route**: `/gallery`
- **Page Components**:
  - Filterable gallery grid display
  - Category filters:
    - Weddings
    - Corporate Events
    - Lifestyle Photography
    - Studio Sessions
    - Events Coverage
    - Product Photography
  - Lightbox/modal viewer for full-size images
  - Video showcase section with embedded video players
  - Pagination or infinite scroll
- **Key Actions**: Filter by category, view full-size images, play video samples

#### 1.4 Services Page
- **Route**: `/services`
- **Page Components**:
  - Photography services detailed breakdown
  - Videography services detailed breakdown
  - 360° Photobooth service details
  - Combined package offerings
  - Service comparison section
  - What's included for each service
- **Key Actions**: Book specific service, view pricing, inquire about custom packages

#### 1.5 Pricing & Packages Page
- **Route**: `/pricing`
- **Page Components**:
  - Package comparison table (Basic, Premium, Deluxe)
  - Duration and deliverables per package
  - Add-ons listing with individual prices:
    - Drone coverage
    - Extra photographer
    - Express delivery
    - Makeup artist
    - Photo album/printed copies
  - Package features checklist
  - Custom package inquiry CTA
  - FAQ section about pricing
- **Key Actions**: Select package, proceed to booking, contact for custom quote

#### 1.6 Contact Page
- **Route**: `/contact`
- **Page Components**:
  - Contact inquiry form (name, email, phone, message)
  - Google Maps embed showing business location
  - Contact details (phone numbers, email addresses, WhatsApp)
  - Business operating hours
  - Social media links (Instagram, Twitter/X, TikTok)
  - Office address
- **Key Actions**: Submit inquiry form, get directions, initiate call/email/WhatsApp

---

## AUTHENTICATION PAGES

### 2. User Authentication Pages

#### 2.1 Login Page
- **Route**: `/login`
- **Page Components**:
  - Email/phone number input field
  - Password input field (with show/hide toggle)
  - "Remember me" checkbox
  - Login button
  - Social login options (Google, Facebook - optional)
  - "Forgot Password?" link
  - "Don't have an account? Sign Up" redirect link
- **Key Actions**: Authenticate user, redirect to dashboard, password recovery

#### 2.2 Register Page
- **Route**: `/register`
- **Page Components**:
  - Full name input field
  - Email address input field
  - Phone number input field
  - Password input field (with strength indicator)
  - Confirm password input field
  - Terms & conditions checkbox
  - Privacy policy acceptance
  - Register/Sign Up button
  - "Already have an account? Login" redirect link
- **Key Actions**: Create new user account, send verification email, redirect to dashboard

#### 2.3 Forgot Password Page
- **Route**: `/forgot-password`
- **Page Components**:
  - Email/phone number input field
  - Instructions text
  - Submit/Send Reset Link button
  - Back to login link
- **Key Actions**: Send password reset link/code to user's email

#### 2.4 Reset Password Page
- **Route**: `/reset-password/{token}`
- **Page Components**:
  - New password input field (with strength indicator)
  - Confirm new password input field
  - Submit/Reset Password button
  - Password requirements display
- **Key Actions**: Update user password, redirect to login page

---

## USER PORTAL PAGES
*Authenticated users only - Requires login*

### 3. User Dashboard Section

#### 3.1 Dashboard Home
- **Route**: `/dashboard` or `/dashboard/home`
- **Page Components**:
  - Welcome message with user's name
  - Quick statistics cards (total bookings, upcoming sessions, completed projects)
  - Upcoming bookings list (next 5 bookings)
  - Recent activity timeline
  - Quick action buttons:
    - Create New Booking
    - View All Sessions
    - View Payments
  - Notifications preview
- **Key Actions**: Navigate to different sections, create new booking, view notifications

---

### 4. Bookings Section

#### 4.1 All Bookings Page
- **Route**: `/dashboard/bookings/all`
- **Page Components**:
  - Comprehensive bookings table/card grid
  - Status badges (Pending, Confirmed, In Progress, Completed, Cancelled)
  - Search functionality
  - Filter options:
    - By status
    - By date range
    - By service type
  - Sort options (date, status, price)
  - Pagination
- **Key Actions**: View booking details, filter/search bookings, navigate to specific booking

#### 4.2 Active Bookings Page
- **Route**: `/dashboard/bookings/active`
- **Page Components**:
  - Filtered view showing only confirmed and in-progress bookings
  - Countdown to session date
  - Action buttons per booking
- **Key Actions**: View details, request modifications, cancel booking

#### 4.3 Completed Bookings Page
- **Route**: `/dashboard/bookings/completed`
- **Page Components**:
  - List of all completed sessions
  - Session completion dates
  - Link to view/download media files
  - Review/rating option
- **Key Actions**: View session files, download media, leave review

#### 4.4 Cancelled Bookings Page
- **Route**: `/dashboard/bookings/cancelled`
- **Page Components**:
  - Archive of cancelled bookings
  - Cancellation date and reason
  - Refund status (if applicable)
- **Key Actions**: View cancellation details, rebook similar session

#### 4.5 Booking Details Page
- **Route**: `/dashboard/bookings/{id}`
- **Page Components**:
  - Complete booking information display:
    - Booking reference number
    - Service type and package details
    - Session type
    - Date, time, and location
    - Selected add-ons
    - Total price breakdown
  - Payment status indicator
  - Assigned photographer/videographer details (if available)
  - Session status timeline/tracker
  - Booking modification request form
  - Cancel booking button
  - Download invoice button
- **Key Actions**: Request changes, cancel booking, view/download invoice, contact support

---

### 5. New Booking Section (Multi-Step Process)

#### 5.1 Step 1 - Service Type Selection
- **Route**: `/dashboard/booking/new/step1-service`
- **Page Components**:
  - Service type cards:
    - Photography Only
    - Videography Only
    - 360° Photobooth
    - Photography + Videography Combo
  - Brief description for each service
  - Visual icons/images
  - Next button
  - Progress indicator (Step 1 of 8)
- **Key Actions**: Select service type, proceed to next step

#### 5.2 Step 2 - Session Type Selection
- **Route**: `/dashboard/booking/new/step2-session`
- **Page Components**:
  - Session type options:
    - Wedding
    - Corporate Event
    - Lifestyle
    - Product Photography
    - Studio Session
    - Outdoor Shoot
    - Event Coverage
  - Description for each session type
  - Back and Next buttons
  - Progress indicator (Step 2 of 8)
- **Key Actions**: Select session type, navigate back/forward

#### 5.3 Step 3 - Package Selection
- **Route**: `/dashboard/booking/new/step3-package`
- **Page Components**:
  - Available packages display (Basic, Premium, Deluxe)
  - Package details for each:
    - Duration
    - Number of edited photos
    - Video length (if applicable)
    - Editing level
    - Turnaround time
    - Price
  - Comparison feature
  - Recommended badge
  - Back and Next buttons
  - Progress indicator (Step 3 of 8)
- **Key Actions**: Select package, compare packages, proceed

#### 5.4 Step 4 - Add-ons Selection
- **Route**: `/dashboard/booking/new/step4-addons`
- **Page Components**:
  - Available add-ons checklist:
    - Drone coverage (+price)
    - Extra photographer (+price)
    - Express delivery (+price)
    - Makeup artist (+price)
    - Photo album/printed copies (+price)
    - Extra hours (+price per hour)
  - Running total calculator
  - Skip this step option
  - Back and Next buttons
  - Progress indicator (Step 4 of 8)
- **Key Actions**: Select add-ons, view price updates, skip or proceed

#### 5.5 Step 5 - Date & Time Selection
- **Route**: `/dashboard/booking/new/step5-datetime`
- **Page Components**:
  - Interactive calendar widget
  - Time slot selector
  - Availability indicator (available/booked dates)
  - Session duration display
  - Alternative date suggestions (if preferred date unavailable)
  - Back and Next buttons
  - Progress indicator (Step 5 of 8)
- **Key Actions**: Select date and time, check availability, proceed

#### 5.6 Step 6 - Location Selection
- **Route**: `/dashboard/booking/new/step6-location`
- **Page Components**:
  - Location type options:
    - Studio (DNX Global Studio)
    - Client Location (custom address)
  - Address input fields (if client location)
  - Google Maps integration for address verification
  - Location notes/special instructions field
  - Back and Next buttons
  - Progress indicator (Step 6 of 8)
- **Key Actions**: Select location type, enter address details, add instructions

#### 5.7 Step 7 - Review & Payment
- **Route**: `/dashboard/booking/new/step7-review`
- **Page Components**:
  - Complete booking summary:
    - Service type
    - Session type
    - Package details
    - Add-ons
    - Date and time
    - Location
    - Price breakdown
    - Total amount
  - Payment options:
    - Full payment
    - Partial payment (deposit)
  - Payment method selection (Card, Bank Transfer, etc.)
  - Terms & conditions checkbox
  - Edit buttons for each section
  - Back and Proceed to Payment buttons
  - Progress indicator (Step 7 of 8)
- **Key Actions**: Review booking details, edit any section, select payment option, proceed to payment

#### 5.8 Step 8 - Confirmation Page
- **Route**: `/dashboard/booking/new/step8-confirmation`
- **Page Components**:
  - Success message with animation
  - Booking reference number (prominent display)
  - Booking summary
  - What happens next section
  - Download invoice button
  - View booking details button
  - Book another session button
  - Email confirmation notice
  - Progress indicator (Step 8 of 8 - Complete)
- **Key Actions**: Download invoice, view booking, create new booking, return to dashboard

---

### 6. Sessions Section

#### 6.1 Sessions List Page
- **Route**: `/dashboard/sessions` or `/dashboard/sessions/list`
- **Page Components**:
  - Grid/list of completed sessions
  - Session thumbnails/preview images
  - Session details (date, type, package)
  - Download status indicators
  - Download expiration dates (if applicable)
  - Filter and sort options
- **Key Actions**: View session gallery, download files, filter sessions

#### 6.2 Session Gallery Page
- **Route**: `/dashboard/sessions/{id}/gallery`
- **Page Components**:
  - Photo and video gallery viewer
  - Grid view and list view toggle
  - Watermarked preview option
  - Image/video lightbox for full-screen viewing
  - Select all/individual selection checkboxes
  - Download selected button
  - Share options
  - Favorite/like feature
- **Key Actions**: Preview media, select files, download, share gallery

#### 6.3 Download Files Page
- **Route**: `/dashboard/sessions/{id}/download`
- **Page Components**:
  - Download options:
    - Download all files
    - Download selected files only
    - Download by category (photos/videos)
  - File size information
  - Estimated download time
  - Download expiration notice
  - Progress bar during download
  - Request re-upload option
  - Alternative download links (if large files)
- **Key Actions**: Download media files, request re-upload, contact support

---

### 7. Payments & Invoices Section

#### 7.1 Payment History Page
- **Route**: `/dashboard/payments` or `/dashboard/payments/history`
- **Page Components**:
  - Payment transactions table with columns:
    - Invoice number
    - Booking reference
    - Date
    - Amount
    - Payment method
    - Status (Paid, Pending, Failed)
  - Search and filter functionality
  - Total spent summary
  - Download/print options for each invoice
  - Export to PDF/CSV
- **Key Actions**: View invoice details, download receipts, filter transactions

#### 7.2 Invoice Details Page
- **Route**: `/dashboard/payments/invoice/{id}`
- **Page Components**:
  - Invoice header:
    - DNX Global business details
    - Invoice number
    - Invoice date
    - Due date (if applicable)
  - Client information
  - Itemized charges:
    - Package
    - Add-ons
    - Subtotal
    - Tax (if applicable)
    - Discounts (if any)
  - Total amount
  - Payment information
  - Outstanding balance (if partial payment)
  - Payment status
  - Download PDF button
  - Print button
  - Payment history for this booking
- **Key Actions**: Download PDF invoice, print invoice, make payment (if outstanding)

---

### 8. Profile Management Section

#### 8.1 Edit Profile Page 
- **Route**: `/dashboard/profile/edit`
- **Page Components**:
  - Profile photo upload/change section
  - Personal information form:
    - Full name
    - Email address (with verification status)
    - Phone number
    - Date of birth (optional)
    - Gender (optional)
  - Address information:
    - Street address
    - City
    - State
    - Postal code
  - Save changes button
  - Cancel button
- **Key Actions**: Update profile information, change profile picture, verify email

#### 8.2 Change Password Page
- **Route**: `/dashboard/profile/password`
- **Page Components**:
  - Current password input field
  - New password input field (with strength indicator)
  - Confirm new password input field
  - Password requirements list:
    - Minimum length
    - Special characters
    - Numbers
    - Uppercase/lowercase
  - Update password button
  - Security tips section
- **Key Actions**: Update password, view security recommendations

#### 8.3 Notification Settings Page
- **Route**: `/dashboard/profile/notifications`
- **Page Components**:
  - Email notification toggles:
    - Booking confirmations
    - Payment receipts
    - Session reminders
    - Session ready notifications
    - Promotional emails
    - Newsletter subscription
  - SMS notification toggles:
    - Booking confirmations
    - Payment confirmations
    - Session reminders
  - WhatsApp notification option
  - Notification frequency settings
  - Save preferences button
- **Key Actions**: Enable/disable notifications, update preferences

---

### 9. Notifications Section

#### 9.1 Notifications Page
- **Route**: `/dashboard/notifications`
- **Page Components**:
  - Notification list (chronological order, newest first)
  - Notification items with:
    - Icon/avatar
    - Title
    - Brief message
    - Timestamp
    - Read/unread indicator
  - Notification types:
    - Booking updates
    - Payment confirmations
    - Session ready alerts
    - System announcements
  - Filter options (All, Unread, Read)
  - Mark all as read button
  - Delete options (individual or bulk)
  - Pagination
- **Key Actions**: View notification details, mark as read, delete notifications

---

## ADMIN PORTAL PAGES
*Admin and staff only - Requires admin authentication and role-based access*

### 10. Admin Dashboard Section

#### 10.1 Admin Dashboard Home
- **Route**: `/admin` or `/admin/dashboard`
- **Page Components**:
  - Key performance indicators (KPIs):
    - Total bookings (today, week, month, year)
    - Revenue (today, week, month, year)
    - Pending approvals count
    - Active sessions count
    - Total clients count
  - Revenue chart (line/bar chart)
  - Recent bookings table (last 10)
  - Pending approvals list
  - Quick action buttons:
    - Add New Booking
    - Add New Client
    - Upload Media
  - Activity feed/log
  - Upcoming sessions calendar view
- **Key Actions**: Navigate to management sections, view analytics, quick actions

---

### 11. Bookings Management Section

#### 11.1 All Bookings Page
- **Route**: `/admin/bookings/all`
- **Page Components**:
  - Comprehensive bookings data table
  - Advanced filters:
    - Date range picker
    - Service type
    - Session type
    - Status
    - Client name
    - Assigned team member
  - Search functionality (by reference, client name, etc.)
  - Bulk actions:
    - Update status
    - Export selected
    - Assign team
  - Export to CSV/Excel button
  - Columns:
    - Booking ID
    - Client name
    - Service type
    - Date & time
    - Package
    - Status
    - Amount
    - Assigned to
    - Actions
- **Key Actions**: View details, filter, export data, bulk actions

#### 11.2 Pending Bookings Page
- **Route**: `/admin/bookings/pending`
- **Page Components**:
  - List of bookings awaiting approval
  - Booking details preview
  - Approve/Reject buttons
  - Request more information option
  - Priority indicators
  - Time since booking created
- **Key Actions**: Approve bookings, reject bookings, request additional info

#### 11.3 Confirmed Bookings Page
- **Route**: `/admin/bookings/confirmed`
- **Page Components**:
  - Approved bookings awaiting execution
  - Team assignment status
  - Days until session
  - Preparation checklist
- **Key Actions**: Assign team members, update status, reschedule, add notes

#### 11.4 In Progress Bookings Page
- **Route**: `/admin/bookings/in-progress`
- **Page Components**:
  - Currently active/ongoing sessions
  - Session progress indicators
  - Real-time status updates
  - Quick notes section
- **Key Actions**: Update status to completed, add session notes

#### 11.5 Completed Bookings Page
- **Route**: `/admin/bookings/completed`
- **Page Components**:
  - Finished sessions list
  - Media upload status
  - Client delivery status
  - Days since completion
- **Key Actions**: Upload media, mark as delivered, view details

#### 11.6 Cancelled Bookings Page
- **Route**: `/admin/bookings/cancelled`
- **Page Components**:
  - Cancelled bookings archive
  - Cancellation reasons
  - Refund status
  - Cancelled by (client/admin)
- **Key Actions**: View cancellation details, process refunds, analyze patterns

#### 11.7 Booking Details/Management Page
- **Route**: `/admin/bookings/{id}`
- **Page Components**:
  - Complete booking information display
  - Client details with quick contact options
  - Service, package, and add-ons details
  - Date, time, location information
  - Payment status and history
  - Team assignment section:
    - Assign photographer dropdown
    - Assign videographer dropdown
    - Assign editor dropdown
  - Status update controls with dropdown
  - Session notes/comments section
  - Internal communication log
  - File upload section (for session media)
  - Action buttons:
    - Approve booking
    - Reschedule booking
    - Cancel booking
    - Mark as completed
    - Send notification to client
  - Activity timeline
  - Edit booking details button
- **Key Actions**: Manage complete booking lifecycle, assign team, upload files, communicate

---

### 12. Client Management Section

#### 12.1 All Clients Page
- **Route**: `/admin/clients` or `/admin/clients/all`
- **Page Components**:
  - Client directory table
  - Search functionality (name, email, phone)
  - Filter options:
    - Registration date
    - Total bookings
    - Total spent
    - Status (active/inactive)
  - Client statistics:
    - Total bookings
    - Total spent
    - Average order value
    - Last booking date
  - Sort options (name, join date, total bookings, total spent)
  - Export client list button
  - Add new client button
  - Bulk actions
- **Key Actions**: View client profile, create new client, export data, filter/search

#### 12.2 Add New Client Page
- **Route**: `/admin/clients/new` or `/admin/clients/create`
- **Page Components**:
  - Client information form:
    - Full name (required)
    - Email address (required)
    - Phone number (required)
    - Address (optional)
    - Date of birth (optional)
  - Account setup:
    - Generate random password option
    - Custom password input
    - Send welcome email checkbox
  - Notes field
  - Save button
  - Cancel button
- **Key Actions**: Create client account for offline bookings, generate credentials

#### 12.3 Client Details/Profile Page
- **Route**: `/admin/clients/{id}`
- **Page Components**:
  - Client profile overview:
    - Profile photo
    - Name and contact information
    - Registration date
    - Status (active/inactive)
  - Statistics cards:
    - Total bookings
    - Total spent
    - Average booking value
    - Completed sessions
  - Edit client information form
  - Booking history table:
    - Booking reference
    - Date
    - Service type
    - Amount
    - Status
    - Actions
  - Payment history section
  - Session records
  - Communication history/log
  - Internal notes section
  - Action buttons:
    - Edit client
    - Deactivate account
    - Send email
    - Create booking for client
    - View invoices
- **Key Actions**: Edit client info, view complete history, add notes, create booking

---

### 13. Media Management Section

#### 13.1 Upload Session Files Page
- **Route**: `/admin/media/upload/{bookingId}`
- **Page Components**:
  - Booking details summary
  - File upload section:
    - Drag-and-drop upload zone
    - Multiple file selection
    - Batch upload support
    - Upload progress bars (individual and overall)
  - File organization options:
    - Create folders/albums
    - Add file descriptions
    - Set file categories (raw, edited, highlights)
  - Preview uploaded files
  - Watermark options:
    - Apply watermark to previews
    - Watermark position settings
  - Notification options:
    - Send email notification to client
    - Send SMS notification
    - Custom message to client
  - Upload button
  - Save and notify client button
- **Key Actions**: Upload photos/videos, organize files, apply watermarks, notify client

#### 13.2 Media Library Page
- **Route**: `/admin/media/library`
- **Page Components**:
  - All uploaded media files grid/list view
  - Filter options:
    - By booking
    - By client
    - By date uploaded
    - By file type (image/video)
    - By session type
  - Search functionality
  - Storage usage statistics:
    - Total storage used
    - Storage by category
    - Storage limit indicators
  - File management options:
    - Preview
    - Download
    - Delete
    - Move to folder
    - Share link
  - Bulk actions
  - Sort options
- **Key Actions**: Browse all media, manage files, check storage, delete old files

#### 13.3 Completed Sessions Page
- **Route**: `/admin/media/completed`
- **Page Components**:
  - Sessions with uploaded files
  - Delivery status for each session
  - Client download activity:
    - Last accessed date
    - Number of downloads
    - Files downloaded
  - Expiration dates for download links
  - Resend notification option
- **Key Actions**: Monitor client downloads, resend notifications, extend expiration

#### 13.4 Pending Delivery Page
- **Route**: `/admin/media/pending`
- **Page Components**:
  - Bookings awaiting file upload
  - Days since session completion
  - Priority indicators (overdue highlighted)
  - Assigned editor information
  - Expected delivery date
  - Quick upload buttons
- **Key Actions**: Upload files quickly, update status, set priorities

---

### 14. Package & Pricing Management Section

#### 14.1 All Packages Page
- **Route**: `/admin/packages` or `/admin/packages/all`
- **Page Components**:
  - Package list table/cards
  - Package information:
    - Name
    - Service type
    - Price
    - Duration
    - Active/inactive status
    - Featured status
  - Package popularity metrics:
    - Times booked
    - Revenue generated
    - Conversion rate
  - Actions per package:
    - Edit
    - Duplicate
    - Delete
    - Toggle active status
    - Set as featured
  - Add new package button
  - Sort and filter options
- **Key Actions**: Create package, edit package, delete, toggle status, analyze performance

#### 14.2 Create Package Page
- **Route**: `/admin/packages/create`
- **Page Components**:
  - Package creation form:
    - Package name (required)
    - Description (rich text editor)
    - Service type selection (Photography/Videography/Combined)
    - Session types (multi-select)
    - Pricing input
    - Currency selection
    - Duration settings (hours)
    - Deliverables section:
      - Number of edited photos
      - Video length (if video package)
      - Raw files included (yes/no)
      - Online gallery (yes/no)
    - Editing level (Basic/Advanced/Premium)
    - Turnaround time (days)
    - Featured package toggle
    - Active/inactive status toggle
  - Preview panel
  - Save as draft button
  - Publish button
  - Cancel button
- **Key Actions**: Create comprehensive package with all details

#### 14.3 Edit Package Page
- **Route**: `/admin/packages/{id}/edit`
- **Page Components**:
  - Package editing form (same fields as create)
  - Booking history for this package
  - Performance metrics
  - Update button
  - Delete package button (with confirmation)
- **Key Actions**: Update package details, view performance, delete package

#### 14.4 Session Types Management Page
- **Route**: `/admin/packages/session-types`
- **Page Components**:
  - List of session types:
    - Wedding
    - Corporate
    - Lifestyle
    - Product
    - Studio
    - Outdoor
    - Events
  - Add new session type form (inline or modal)
  - Edit session type (name, description, icon)
  - Delete option with usage warning
  - Drag-and-drop reordering
  - Active/inactive toggle
- **Key Actions**: Add session types, edit existing, reorder, delete unused

#### 14.5 Add-ons Management Page
- **Route**: `/admin/packages/addons`
- **Page Components**:
  - Add-ons list table
  - Add-on details:
    - Name
    - Description
    - Price
    - Category (equipment, personnel, delivery, print)
    - Active status
    - Times selected
  - Add new add-on button
  - Inline editing
  - Delete option
  - Reorder functionality
- **Key Actions**: Create add-ons, edit pricing, manage availability, delete

#### 14.6 Pricing Rules Page
- **Route**: `/admin/packages/pricing`
- **Page Components**:
  - Base pricing configuration
  - Seasonal pricing rules:
    - Peak season dates
    - Off-season dates
    - Price adjustments (percentage or fixed)
  - Discount management:
    - Early bird discounts
    - Bulk booking discounts
    - Referral discounts
  - Promo code creation:
    - Code name
    - Discount type (percentage/fixed)
    - Valid dates
    - Usage limits
    - Applicable packages
  - Dynamic pricing settings
  - Save pricing rules button
- **Key Actions**: Set pricing strategies, create promo codes, manage discounts

---

### 15. Team Management Section (Optional)

#### 15.1 All Staff Page
- **Route**: `/admin/team` or `/admin/team/all`
- **Page Components**:
  - Staff directory table/cards
  - Staff information:
    - Photo
    - Name
    - Role (Admin, Photographer, Videographer, Editor)
    - Specialization
    - Email
    - Phone
    - Active/inactive status
  - Performance metrics:
    - Assignments completed
    - Average rating
    - Availability status
  - Add new staff button
  - Filter by role
  - Search functionality
- **Key Actions**: Add staff, edit details, deactivate accounts, view performance

#### 15.2 Add Staff Member Page
- **Route**: `/admin/team/add` or `/admin/team/create`
- **Page Components**:
  - Staff information form:
    - Full name
    - Email address
    - Phone number
    - Profile photo upload
  - Role assignment:
    - Admin
    - Photographer
    - Videographer
    - Editor
    - Multiple roles selection
  - Permission settings checklist
  - Specialization:
    - Wedding specialist
    - Corporate specialist
    - Portrait specialist
    - Event specialist
  - Login credentials setup:
    - Username
    - Password
    - Force password change on first login
  - Equipment assigned (optional)
  - Save button
- **Key Actions**: Create staff account with role and permissions

#### 15.3 Staff Details Page
- **Route**: `/admin/team/{id}`
- **Page Components**:
  - Staff profile display
  - Edit information form
  - Assigned bookings:
    - Current assignments
    - Upcoming assignments
    - Completed assignments
  - Performance metrics:
    - Total assignments
    - Completion rate
    - Average client rating
    - On-time delivery rate
  - Availability calendar
  - Skills and specializations
  - Equipment assigned
  - Internal notes
  - Action buttons:
    - Edit staff
    - Deactivate account
    - Reset password
    - View schedule
- **Key Actions**: Edit staff details, view assignments, manage availability

#### 15.4 Roles & Permissions Page
- **Route**: `/admin/team/roles`
- **Page Components**:
  - Role definitions list:
    - Super Admin
    - Admin
    - Photographer
    - Videographer
    - Editor
    - Receptionist/Coordinator
  - Permission matrix table:
    - View bookings
    - Create bookings
    - Edit bookings
    - Delete bookings
    - View clients
    - Manage clients
    - Upload media
    - Manage finances
    - Access settings
  - Create custom role button
  - Edit role permissions
  - Delete custom roles
- **Key Actions**: Manage access control, create custom roles, assign permissions

#### 15.5 Availability Management Page
- **Route**: `/admin/team/availability`
- **Page Components**:
  - Team calendar view (week/month view)
  - Individual staff availability schedules
  - Booking assignments overlay on calendar
  - Color-coded availability status:
    - Available
    - Booked/Assigned
    - On leave
    - Unavailable
  - Conflict detection and warnings
  - Drag-and-drop assignment
  - Leave management section
  - Bulk availability settings
- **Key Actions**: View team schedules, assign bookings, manage conflicts, set leave dates

---

### 16. Finance & Reports Section

#### 16.1 Revenue Dashboard Page
- **Route**: `/admin/finance/revenue`
- **Page Components**:
  - Revenue summary cards:
    - Today's revenue
    - This week's revenue
    - This month's revenue
    - This year's revenue
  - Revenue charts:
    - Line chart (daily/weekly/monthly/yearly trends)
    - Bar chart (comparison periods)
  - Revenue by service type (pie chart):
    - Photography
    - Videography
    - 360° Booth
    - Combined packages
  - Revenue by package (bar chart):
    - Basic
    - Premium
    - Deluxe
  - Revenue by session type
  - Growth trends and percentages
  - Year-over-year comparison
  - Date range selector
  - Export report button
- **Key Actions**: View detailed revenue analytics, compare periods, export reports

#### 16.2 Payment Logs Page
- **Route**: `/admin/finance/payments`
- **Page Components**:
  - All payment transactions table
  - Transaction details:
    - Transaction ID
    - Date & time
    - Client name
    - Booking reference
    - Amount
    - Payment method (Card, Bank Transfer, Cash)
    - Status (Success, Pending, Failed, Refunded)
    - Gateway response
  - Payment method breakdown chart
  - Success/failed payments statistics
  - Refund tracking section
  - Search and filter functionality:
    - By date range
    - By status
    - By payment method
    - By client
  - Export to CSV/Excel
  - Reconciliation tools
- **Key Actions**: View all transactions, process refunds, reconcile payments, export data

#### 16.3 Manual Payment Entry Page
- **Route**: `/admin/finance/manual-payment`
- **Page Components**:
  - Manual payment entry form:
    - Booking selection (dropdown with search)
    - Client information (auto-populated)
    - Amount input
    - Payment method selection:
      - Cash
      - Bank Transfer
      - Check
      - Other
    - Payment date picker
    - Transaction reference number
    - Receipt upload option
    - Notes/description field
  - Booking balance calculator
  - Receipt preview
  - Save payment button
  - Generate receipt button
- **Key Actions**: Record offline payments, upload receipts, update booking balance

#### 16.4 Financial Reports Page
- **Route**: `/admin/finance/reports`
- **Page Components**:
  - Report generator tool:
    - Report type selection:
      - Revenue report
      - Bookings report
      - Client report
      - Payment report
      - Tax report
      - Commission report
    - Date range selector
    - Filter options (service type, status, etc.)
    - Format selection (PDF/Excel/CSV)
  - Saved/scheduled reports list
  - Quick report templates
  - Generate report button
  - Schedule automated reports:
    - Frequency (daily/weekly/monthly)
    - Recipients email list
    - Report type
  - Report history/archive
- **Key Actions**: Generate custom reports, schedule automated reports, download/email reports

#### 16.5 Analytics Page
- **Route**: `/admin/finance/analytics`
- **Page Components**:
  - Business intelligence dashboard:
    - Most booked services chart (bar/pie)
    - Package performance metrics
    - Add-ons popularity chart
    - Client acquisition trends (line chart)
    - Client retention rate
    - Seasonal trends analysis
    - Peak booking times (heatmap):
      - By day of week
      - By month
      - By time of day
    - Average order value (AOV)
    - Customer lifetime value (CLV)
    - Conversion rate metrics
    - Cancellation rate analysis
  - Comparison tools
  - Predictive analytics (optional)
  - Export analytics button
- **Key Actions**: Analyze business performance, identify trends, make data-driven decisions

---

### 17. Content Management Section

#### 17.1 Gallery Management Page
- **Route**: `/admin/content/gallery`
- **Page Components**:
  - Portfolio upload interface:
    - Drag-and-drop upload zone
    - Multiple file upload
    - Bulk upload support
  - Gallery items grid display
  - Category assignment:
    - Weddings
    - Corporate
    - Lifestyle
    - Studio
    - Events
    - Product
  - Item management options:
    - Edit details (title, description, category)
    - Featured item toggle (appears on homepage)
    - Set as cover photo
    - Visibility toggle (public/hidden)
    - Delete
  - Image/video metadata editor
  - Sort order management (drag-and-drop)
  - Bulk operations:
    - Bulk category change
    - Bulk delete
    - Bulk feature/unfeature
  - Preview gallery (as clients see it)
- **Key Actions**: Upload portfolio items, organize gallery, feature best work, manage categories

#### 17.2 Testimonials Management Page
- **Route**: `/admin/content/testimonials`
- **Page Components**:
  - Testimonials list display
  - Add new testimonial form (modal or inline):
    - Client name
    - Client photo upload
    - Rating (1-5 stars)
    - Testimonial text (rich text editor)
    - Service type (dropdown)
    - Date
    - Approve/featured toggle
  - Edit testimonial functionality
  - Approval status:
    - Pending approval
    - Approved
    - Featured (displays on homepage)
  - Display order management
  - Delete option with confirmation
  - Filter by:
    - Status (pending/approved/featured)
    - Rating
    - Service type
  - Preview testimonials section
- **Key Actions**: Add customer testimonials, approve/reject, feature testimonials, manage display

#### 17.3 Home Page Content Management
- **Route**: `/admin/content/homepage`
- **Page Components**:
  - Hero section editor:
    - Heading text input
    - Subheading text input
    - Background image/video upload
    - Call-to-action button text
    - Button link/action
  - Service highlights editor:
    - Photography service card
    - Videography service card
    - 360° Booth service card
    - Edit icon, title, description for each
  - Featured packages selection:
    - Select packages to feature (checkbox)
    - Reorder featured packages
  - Testimonials section settings:
    - Auto-rotation toggle
    - Rotation speed
  - Partners/clients logos:
    - Upload logo images
    - Manage displayed logos
    - Reorder logos
  - Statistics section (optional):
    - Happy clients count
    - Projects completed
    - Years of experience
    - Team members
  - Preview changes button
  - Save changes button
  - Publish button
- **Key Actions**: Customize homepage content, update hero section, manage featured content

#### 17.4 About Page Content Management
- **Route**: `/admin/content/about`
- **Page Components**:
  - Company overview editor (rich text):
    - About DNX Global text
    - Edit formatting, images, videos
  - Mission and vision editor:
    - Mission statement
    - Vision statement
    - Core values list
  - Team member management:
    - Add team member form:
      - Name
      - Position/role
      - Photo upload
      - Bio
      - Social links
    - Edit existing team members
    - Reorder team display
    - Remove team members
  - Behind-the-scenes media:
    - Upload photos/videos
    - Add captions
    - Arrange display
  - Company history/timeline editor (optional)
  - Preview page button
  - Save changes button
- **Key Actions**: Update company information, manage team profiles, edit mission/vision

---

### 18. Settings Section

#### 18.1 Business Information Settings
- **Route**: `/admin/settings/business`
- **Page Components**:
  - Business details form:
    - Company name
    - Logo upload (primary and alternate)
    - Favicon upload
    - Tagline/slogan
    - Business description
    - Business registration number
    - Tax ID/VAT number
    - Business type
  - Brand colors:
    - Primary color picker
    - Secondary color picker
    - Accent color picker
  - Save changes button
  - Preview branding button
- **Key Actions**: Update business information, upload logos, set brand colors

#### 18.2 Contact Details Settings
- **Route**: `/admin/settings/contact`
- **Page Components**:
  - Contact information form:
    - Primary phone number
    - Secondary phone number
    - WhatsApp number
    - Primary email address
    - Support email address
    - Inquiry email address
    - Physical address (street, city, state, postal code, country)
  - Social media links:
    - Facebook URL
    - Instagram URL
    - Twitter/X URL
    - TikTok URL
    - LinkedIn URL
    - YouTube URL
  - Google Maps location:
    - Latitude/longitude
    - Maps embed code
  - Save changes button
- **Key Actions**: Update all contact information, set social media links

#### 18.3 Operating Hours Settings
- **Route**: `/admin/settings/hours`
- **Page Components**:
  - Weekly schedule editor:
    - Monday - Sunday
    - Opening time
    - Closing time
    - Closed toggle for each day
  - Break time settings (optional)
  - Special hours/holidays:
    - Add holiday dates
    - Custom hours for specific dates
    - Holiday message
  - Closed dates management:
    - Add closed dates
    - Reason for closure
  - Timezone setting
  - Save schedule button
- **Key Actions**: Set business hours, manage holidays, configure special dates

#### 18.4 Payment Gateway Settings
- **Route**: `/admin/settings/payment`
- **Page Components**:
  - Payment provider selection:
    - Paystack
    - Flutterwave
    - Stripe
    - Multiple provider support toggle
  - API configuration for each provider:
    - Public/Publishable key
    - Secret key
    - Test mode toggle
    - Webhook URL (auto-generated with copy button)
  - Payment methods enabled:
    - Credit/debit cards
    - Bank transfer
    - USSD
    - Bank account
    - Mobile money
  - Currency settings:
    - Default currency (NGN, USD, etc.)
    - Multiple currency support
  - Payment terms:
    - Partial payment enabled toggle
    - Minimum deposit percentage
    - Payment due date settings
  - Test connection button
  - Save payment settings button
- **Key Actions**: Configure payment gateways, set payment terms, test integration

#### 18.5 Email/SMS/Notification Configuration
- **Route**: `/admin/settings/notifications`
- **Page Components**:
  - Email service provider setup:
    - Provider selection (SMTP, Mailgun, SendGrid, SES)
    - SMTP settings (host, port, username, password)
    - From email address
    - From name
    - Test email button
  - SMS gateway configuration:
    - Provider selection (Twilio, Africa's Talking, Termii)
    - API credentials
    - Sender ID/name
    - Test SMS button
  - WhatsApp Business API (optional):
    - API credentials
    - Business account ID
    - Test message button
  - Email templates editor:
    - Booking confirmation template
    - Payment received template
    - Session ready template
    - Password reset template
    - Welcome email template
    - Custom variables guide
  - SMS templates editor:
    - Booking confirmation SMS
    - Payment confirmation SMS
    - Session reminder SMS
  - Notification triggers configuration:
    - When to send each notification
    - Delay settings
    - Reminder schedules
  - Save notification settings button
- **Key Actions**: Configure email/SMS services, customize templates, test notifications

#### 18.6 Integration Settings
- **Route**: `/admin/settings/integrations`
- **Page Components**:
  - Cloud storage integration:
    - Storage provider selection:
      - AWS S3
      - Cloudinary
      - Google Drive
      - Dropbox
    - API credentials input
    - Bucket/folder settings
    - Storage limits
    - Test connection button
  - Calendar integrations:
    - Google Calendar sync
    - Outlook Calendar sync
    - API credentials
  - CRM integration (optional):
    - CRM platform selection
    - API connection
  - Analytics tools:
    - Google Analytics tracking ID
    - Facebook Pixel ID
    - Other tracking codes
  - Social media auto-posting (optional):
    - Instagram API
    - Facebook API
  - Webhook settings:
    - Custom webhook URLs
    - Events to trigger webhooks
  - Save integration settings button
- **Key Actions**: Connect third-party services, configure storage, set up analytics

#### 18.7 System Settings
- **Route**: `/admin/settings/system`
- **Page Components**:
  - General system settings:
    - Site name
    - Site URL
    - Admin email
    - Items per page (pagination)
  - Regional settings:
    - Timezone
    - Date format (DD/MM/YYYY, MM/DD/YYYY, etc.)
    - Time format (12-hour, 24-hour)
    - Currency format
    - Number format
  - Language options:
    - Default language
    - Available languages (multi-language support)
  - Session settings:
    - Session lifetime
    - Logout on browser close
  - Security settings:
    - Enable two-factor authentication
    - Password requirements
    - Login attempt limits
    - IP whitelist (for admin access)
  - Maintenance mode:
    - Enable maintenance mode toggle
    - Maintenance message
    - Allowed IP addresses (admin access during maintenance)
  - Backup management:
    - Database backup
    - Files backup
    - Backup schedule
    - Restore from backup
  - System logs:
    - View application logs
    - Error logs
    - Activity logs
    - Download logs
  - Cache management:
    - Clear cache button
    - Cache status
  - System information:
    - Laravel version
    - PHP version
    - Server information
    - Database information
  - Save system settings button
- **Key Actions**: Configure system preferences, manage security, handle backups, view logs

---

## UTILITY PAGES

### 19. System & Error Pages

#### 19.1 404 - Page Not Found
- **Route**: `/404` (or any non-existent route)
- **Page Components**:
  - 404 error illustration/image
  - "Page Not Found" heading
  - Friendly error message
  - Search bar (to find content)
  - Navigation links:
    - Go to Homepage
    - View Services
    - Contact Us
  - Sitemap links
  - Back button
- **Key Actions**: Navigate to valid pages, search for content

#### 19.2 500 - Server Error
- **Route**: `/500`
- **Page Components**:
  - 500 error illustration
  - "Something Went Wrong" heading
  - Apologetic error message
  - Support contact information:
    - Email support
    - Phone support
    - WhatsApp support
  - Retry button
  - Go to Homepage button
  - Report issue button
- **Key Actions**: Report issue to support, retry request, return to homepage

#### 19.3 503 - Maintenance Mode
- **Route**: `/503` or `/maintenance`
- **Page Components**:
  - Maintenance illustration/animation
  - "We'll Be Back Soon" heading
  - Maintenance message
  - Expected completion time/countdown timer
  - Subscribe for notification form (email)
  - Social media links (stay connected)
  - Emergency contact information
- **Key Actions**: Subscribe for updates, check social media, contact support

#### 19.4 403 - Forbidden/Access Denied
- **Route**: `/403`
- **Page Components**:
  - Access denied illustration
  - "Access Denied" heading
  - Explanation message
  - Login button (if not authenticated)
  - Contact admin button
  - Go back button
  - Homepage link
- **Key Actions**: Login with proper credentials, contact administrator

---

### 20. Legal & Information Pages

#### 20.1 Terms & Conditions Page
- **Route**: `/terms`
- **Page Components**:
  - Terms and conditions content:
    - Introduction
    - Definitions
    - Service terms
    - Booking terms
    - Payment terms
    - Cancellation and refund policy
    - Intellectual property rights
    - Limitation of liability
    - Dispute resolution
    - Governing law
  - Table of contents (jump links)
  - Last updated date
  - Print button
  - Download as PDF button
  - Accept terms button (during registration flow)
  - Contact for questions link
- **Key Actions**: Read terms, print, download, accept during registration

#### 20.2 Privacy Policy Page
- **Route**: `/privacy`
- **Page Components**:
  - Privacy policy content:
    - Information we collect
    - How we use your information
    - Data storage and security
    - Third-party services
    - Cookies policy
    - Your rights (access, deletion, modification)
    - GDPR compliance (if applicable)
    - Contact information for privacy concerns
  - Table of contents
  - Last updated date
  - Print button
  - Download as PDF button
  - Data protection officer contact
- **Key Actions**: Read policy, understand data usage, exercise privacy rights

#### 20.3 Cancellation & Refund Policy Page
- **Route**: `/refund-policy` or `/cancellation-policy`
- **Page Components**:
  - Cancellation policy details:
    - Cancellation timeframes
    - Refund percentages based on notice period
    - Non-refundable items
    - Emergency cancellations
    - Rescheduling policy
  - Refund process explanation
  - Refund timeline
  - How to request cancellation
  - Contact support button
  - FAQ section
- **Key Actions**: Understand cancellation terms, request cancellation

---

### 21. Payment Callback Pages

#### 21.1 Payment Success Page
- **Route**: `/payment/success`
- **Page Components**:
  - Success animation/checkmark
  - "Payment Successful" heading
  - Transaction details:
    - Transaction reference
    - Amount paid
    - Payment method
    - Date and time
  - Booking reference number (prominent display)
  - What happens next section:
    - Confirmation email sent
    - Admin review process
    - Expected response time
  - Action buttons:
    - View booking details
    - Download receipt/invoice
    - Book another session
    - Return to dashboard
  - Print receipt button
  - Share on social media (optional)
- **Key Actions**: View booking, download receipt, create new booking

#### 21.2 Payment Failed Page
- **Route**: `/payment/failed`
- **Page Components**:
  - Failure icon/illustration
  - "Payment Failed" heading
  - Error message explanation
  - Possible reasons for failure:
    - Insufficient funds
    - Card declined
    - Network error
    - Invalid card details
  - Transaction reference (if available)
  - Retry payment section:
    - Try again button
    - Change payment method option
  - Alternative payment methods:
    - Bank transfer instructions
    - Cash payment option
    - Contact support for manual payment
  - Support contact:
    - Phone
    - Email
    - WhatsApp
  - Return to booking button
  - Cancel booking option
- **Key Actions**: Retry payment, try different method, contact support, cancel booking

#### 21.3 Payment Pending Page
- **Route**: `/payment/pending`
- **Page Components**:
  - Pending status icon
  - "Payment Verification in Progress" heading
  - Message explanation
  - Transaction reference
  - Expected verification time
  - What to do while waiting
  - Check status button
  - Contact support if delayed
  - Return to dashboard button
- **Key Actions**: Wait for verification, check status, contact support if needed

---

## TOTAL PAGE COUNT SUMMARY

### Public Pages: **6 pages**
- Home
- About Us
- Gallery
- Services
- Pricing
- Contact

### Authentication Pages: **4 pages**
- Login
- Register
- Forgot Password
- Reset Password

### User Portal Pages: **23 pages**
- Dashboard Home (1)
- Bookings (5 pages: All, Active, Completed, Cancelled, Details)
- New Booking (8 steps/pages)
- Sessions (3 pages: List, Gallery, Download)
- Payments (2 pages: History, Invoice Details)
- Profile (3 pages: Edit, Password, Notifications)
- Notifications (1)

### Admin Portal Pages: **43 pages**
- Admin Dashboard (1)
- Bookings Management (7 pages)
- Client Management (3 pages)
- Media Management (4 pages)
- Packages & Pricing (6 pages)
- Team Management (5 pages)
- Finance & Reports (5 pages)
- Content Management (4 pages)
- Settings (7 pages)

### Utility Pages: **11 pages**
- Error pages (4: 404, 500, 503, 403)
- Legal pages (3: Terms, Privacy, Refund Policy)
- Payment callback pages (3: Success, Failed, Pending)

---

## GRAND TOTAL: **87 DISTINCT PAGES**

---

## ADDITIONAL NOTES FOR DEVELOPMENT TEAM

### Page Organization Principles
1. **Progressive Disclosure**: Complex processes (like booking) are broken into manageable steps
2. **Consistent Navigation**: Each section has clear breadcrumbs and navigation
3. **Role-Based Access**: Pages are strictly controlled by user roles (Guest, User, Admin)
4. **Mobile Responsive**: All pages must be fully responsive
5. **Accessibility**: WCAG 2.1 compliance for all pages

### Key User Flows
1. **Guest → Registration → Booking → Payment → User Dashboard**
2. **User → New Booking (8 steps) → Payment → Confirmation**
3. **Admin → Bookings Management → Assign Team → Upload Media → Client Notified**
4. **Client → Sessions → View Gallery → Download Files**

### Development Priority
**Phase 1 (Critical):**
- Public pages (Home, Services, Pricing, Contact)
- Authentication pages
- Basic booking flow
- Payment integration

**Phase 2 (Core):**
- User dashboard and booking management
- Admin dashboard and booking management
- Client management
- Basic media upload

**Phase 3 (Enhanced):**
- Complete media management
- Team management
- Finance and analytics
- Content management

**Phase 4 (Polish):**
- Advanced settings
- Complete reporting
- System optimization
- Error handling and utility pages

---

**End of Document**

*This structure provides a comprehensive blueprint for the complete DNX Global Photography & Videography Booking Platform.*