### Object Oriented PHP

ООП базується на трьох основних принципах: **інкапсуляція**, **наслідування** та **поліморфізм**.

- Any method with the same name on a child class will overwrite
methods of the same name on the parent class

- A child CAN access the methods and properties on a parent, but a parent CANNOT access methods on a child. A parent should know nothing about a child.

#### Visibility

* **Public** properties and methods can be accessed anywhere in code.

* **Protected** properties and methods can be accessed only withinthe declaring class or from a sunclass

* **Private** properties and methods can be accessed only within the declaring class. They are not visible anywhere else.

#### Encapsulation

**Why do we have encapsulation?**

1. The functionality is defined in one place and not in multiple places.
2. It is defined in a logical place, i.e. the same place as its data.
3. The data inside our objects can't be unexpectededly or unwantedly 
modified by external code in a completely different part of our program.

#### Static properties

Stattic properties differ from regular object properties and
that you call them directly of the class, not an instatnce object

To access static properties use two colons after class name:

    ClassName::$staticProperty;

**Why use static?**

- Available anywhere in program.
- Easy to setup and access.
- Same value is available to every object instance of that class.

To access static property within the class is use `self::` keyword:
    `self::$staticPropertyName;`