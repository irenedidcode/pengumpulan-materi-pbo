<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Static Properties</title>
</head>
<body>
    <?php
        class ParentClass 
        {
            // deklarasi properti global
            public static $judul = "Hi, saya properti static dari " . __CLASS__;

            public static function display()
            {
                echo self::$judul;
            }
        }

        class ChildClass extends ParentClass
        {
            public static $judul = "Hi, saya properti static dari " . __CLASS__;

            public static function display()
            {
                echo self::$judul; // Access the child's own static property
            }

            public static function displayFromChild()
            {
                self::display(); // Call the display method of the current class (ChildClass)
            }
        }

        // Test the output
        $obj = new ParentClass;
        $obj2 = new ChildClass;
    ?>
    <h1><?php echo ChildClass::displayFromChild(); ?> </h1>
    <h1><?php echo ParentClass::display(); ?> </h1>
</body>
</html>