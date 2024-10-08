# Repetitive Cafe
Project is created as part of Codecademy's Learn PHP course.

## Description
Make use of some of the PHP loop shorthand to create HTML for a restaurant menu. Practice using the different loop types with HTML.

## Project Instructions
Prep

This is a menu page for the cafe. We are going to add some drinks which are uniquely priced and some pastries which each sell for $2.

We’re going to store the names and prices (for drinks) of the items in PHP and embed PHP in our HTML to display them.

Begin by creating a PHP section at the top of the file to store the item details.

Create an array $drinks and populate it with several drinks you’d like to serve in your cafe. The name of the drink should be the key and the price should be the value.

Add a list of pastries to serve in your cafe. Since they are all $2, there is no need to add prices.

foreach Loop

Within the <ul> section under drinks, create a foreach loop using the shorthand syntax. It should iterate over the items in $drinks and provide access to the keys and values.

Within that foreach loop, add an li element for each drink item.

Within the li element, re-enter PHP mode to print the name of the drink and the price. Feel free to use your local currency.

for Loop

Next, we need to add our list of pastries to the menu.

Begin by adding a for loop within the ul element under the “Pastries!” heading. The loop variable should be initialized to 0 and increment at each loop iteration.

We are going to use the loop variable to access elements within $pastries, so we need the for loop to continue while our loop counter is less than the number of items in $pastries.

Add this condition to your for loop.

Create an li element for each loop iteration.

Within the li element, use the loop variable to index into $pastries and print the name of each pastry.

Additional ideas

Great! You now have a menu of drinks and pastries for the cafe. Note how you can easily update the arrays at the beginning of the file and the HTML website is updated accordingly.

If you would like to keep practicing, try adding a food section to the menu and use a while loop to iterate over the items.

Which loop type is the most readable for you?

Which was the easiest to create for this type of application?


## Languages used:
* HTML
* PHP
