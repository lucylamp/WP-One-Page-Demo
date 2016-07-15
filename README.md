# WP-One-Page-Demo
How to make a one-page scrolling site in WordPress.

Author: Lucy Lamp

Code License: MIT


1. Create individual posts as usual.
2. Give them all the same category
3. Make a static front page. 
4. Edit page.php to create a template for a one page site
5. Use WP Query to retrieve posts in the designated category.
6. Orderby: category.
7. Order: ascending
8. The posts will stack up on the front page in the designated order. 
9. Make sure there's no margin between posts.
10. In the HTML markup create empty divs with unique ID's as anchors for navigation.
11. For the navigation in WP menus: Create the menu items as Custom Links. 
12. For the http:// of the Custom Link use the the anchor div ID's.(Example #hello-world).
13. For the Link Text use the title of the post. 
14. You can add Back To Top navigation manually by creating an empty div at the top of the page with the ID 'top'.
15. You can add Next links by adding an href at the bottom of the post to wherever yopu wwant it to go.






