# oop-introduction

This is it!  We've arrived at writing php in OOP, short for Object-Oriented programming.
From what I've heard, this will make programming faster and way easier to execute.

I do love nice and clean structure, like to save myself from doing things over and over again.  
And this is what I will get using OOP!

I'm diving in and!  

## Exercise 1: Learn how to create a class, a new object, create a method and call it.
1. We need to create classes in order to create objects:  
- A class will store all the common characteristics of the objects.
- The name of the class should be in upper camel case, each word capitalized.
- Each class will have its own separate file.
2. The common characteristics are added as PROPERTIES to represent the objects state:
- these are variables placed at the top, inside the class with an access MODIFIER in the 
front to control where they can be accessed:
  - public: access from everywhere.
  - protected: access from within class or it's children.
  - private: only access from within the class.
    (these access modifiers are also used when creating methods)
- followed by a SCALAR DATA TYPE: string, integer(10°, integerstring("10"), float("10.5")
3. ADD METHODS: which also starts with a MODIFIER, followed by a function name and parameter(s) to represent the objects behaviour.
- The first method is the constructor or __construct(arguments exept the ones that will get a default value) function.  This function will be called auto-
matically when a new object is created.
- Followed by other methods.  to create a method: modifier, function-name(parameter-list): scalar-data-type (void doesn't return anything)
- IMPLEMENTATION inside tha function:
    - $this will reference to the current object.
    - -> (=object operator)
    - property-name
    - =
    - property-value ($variabele or hardcode for default)
- the method can be called: $object->function();
4. create a new object from a class:
- object-name (variable)
- =
- new
- class-name(new values);

## Exercise 2: Learn how to create a class that extents from a class (sub-class), learn how to create & call get methods.
1. Create the class:
- class class-name (of the new child-class)
- extends
- class-name (of th parent-class)
2. add properties, specific to this class
3. add constructor-method with parameters from both parent-class en the current class.
- implement the parent constructor parent:: __construct($parameters);
- and assign values to the new properties
4. Create methods to get the value of a property:
- modifier, function-name(parameter-list): scalar-data-type
- return $this->property-name;

## Exercise 3: Learn how private properties work and why it's safer to use them, change property-values using set methods.
1. When properties are set to private instead of public, they are no longer accessible from outside the class.
for example, public methods inside the same class, can still access the private properties.
2. Create methods to set the value of a property:
- modifier, function-name(parameter-list): scalar-data-type
- return $this->property-name = property-value ($variabele or hardcode for default)

## Exercise 4: Learn how protected properties work and when to use them.
1. When properties are set to protected instead of public or private, they are no longer accessible from outside the class
but can still be reached from within the class itself and it's children/extended classes.

## Exercise 5: Learn how protected properties work and when to use them.
1. All properties are set back to private.
2. Instead of using a getter to get the price, and a setter to set a new price, we are creating a new function to change it.
- use a conditional statement to find out if the price should be changed using an if statement.  

  - If false, an error with message will appear: return Error('message');
  - otherwise, the price will be changed.
- to display the new price, the price property will need to be set to public otherwise the function will not run.  
Then,just call the function with the new price as parameter.

### Conclusion: it is always best to keep it private.  If really necessary protected is the next safe way to go.  Sometimes we have no other chance than turning it to public in order to make your code work.

## Exercise 6: Learn how constants work and when to display them.## 
1. Constants are declared just like the changeable variables, inside the class.
Once declared, they can no longer be changed.
- const CONST_VALUE = "value of the constant";
2. To access the constants from within the class a public function needs to be created.
- use the self-keyword followed by the :: (=scope resolution operator).
3. To access from within a class derived from the class where the contant was declared
another function needs to be made.
- use the parent::name of the function();
4. print the constant:
  - directly : echo ClassName::CONSTANT_NAME;
  - from the function within the same class or child-class: echo $object::functionName();







  




