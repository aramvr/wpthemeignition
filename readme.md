# Ignition theme 

## Installation

For configurate menu please go to menu section from Wordpress dashboard and set "Header Menu" as Display location.

Please Install required plugins from Appearance -> Install Plugins

After that you need to connect MailChimp with your API key.

You can edit all text fields form Appearance ->  Theme Setting.


## Usage

For have same contact form result as design you need to add new form in Contact Form 7 and past this form code.

```
<div class="row contact-form-container col-md-10 offset-md-1">
    <div class="col-xl-12 text-center">
       <div class="input-group">
    [textarea your-message class:form-control placeholder "Enquiry..."]
       </div>
    </div>
    <div class="col-md-6 left-padding">
       <div class="input-group">
          [text* your-name class:form-control placeholder "Name*"]
       </div>
    </div>
    <div class="col-md-6 right-padding">
       <div class="input-group">
          [text* company class:form-control placeholder "Company*"]
    </div>
    </div>
    <div class="col-md-6 left-padding">
        <div class="input-group">
          [text phone class:form-control placeholder "Phone"]
    
        </div>
    </div>
    <div class="col-md-6 right-padding">
        <div class="input-group">
          [text* email class:form-control placeholder "Your email address*"]
         </div>
    </div>
    <div class="col-xl-12 text-center">
    [submit class:send-button "Send"]
    </div>
</div>
```
After that go to Theme Setting and change your new contact form id in Contact Form section.