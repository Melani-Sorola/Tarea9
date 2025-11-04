# Task 9 – Laravel AdminLTE Integration

## Objective
The objective of this task is to integrate the content created in Activity 11 (Menus Project) into an administrative panel using **AdminLTE 3** and **Laravel 7**. The purpose is to demonstrate the use of Laravel Blade templates with an admin interface that includes navigation, section inheritance, and a fixed dashboard layout.

---

## Project Description
A new Laravel 7 project named **task9** was created to implement the AdminLTE 3 template as an admin interface.  
The AdminLTE theme was downloaded, and its structure was integrated into the Laravel project under the `public/dist` folder for access to CSS, JS, and assets.

All unnecessary example files from AdminLTE were removed, and only the essential layout components were kept.  
The sidebar menu was customized with three main options derived from the previous activity:

- **Home**
- **Photos**
- **Contact**

Each option corresponds to an independent view created in the `resources/views` folder.  
These views extend from a **main Blade layout (`admin.blade.php`)**, which contains the following features:
- A **fixed sidebar** with icons and active state highlighting.  
- A **top header bar** labeled “Task 9 – Dashboard”.  
- A **footer** displayed on all pages with developer information.  

The sidebar content and structure were fully redesigned using Blade directives for clean, reusable code.  
Routes were defined in `web.php` to connect each section properly.