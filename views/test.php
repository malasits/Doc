<?php 

    include("../packages/Auryn1.4.2/Reflector.php");
    include("../packages/Auryn1.4.2/InjectorException.php");
    include("../packages/Auryn1.4.2/ConfigException.php");  
    include("../packages/Auryn1.4.2/CachingReflector.php");
    include("../packages/Auryn1.4.2/Executable.php");
    include("../packages/Auryn1.4.2/InjectionException.php");
    include("../packages/Auryn1.4.2/Injector.php");
    include("../packages/Auryn1.4.2/ReflectionCache.php");
    include("../packages/Auryn1.4.2/ReflectionCacheApc.php");
    include("../packages/Auryn1.4.2/ReflectionCacheArray.php");
    include("../packages/Auryn1.4.2/StandardReflector.php");


        //INTERFACE
        interface IEmployee {
            public function GetName();
            public function SetName($name);
        }

        //INTERFACET-t megvalósító osztály
        class EmployeeFactory implements IEmployee {

            private $Name = "Attila";
            private $Age = 0;

            public function SetName($name){
                $this -> Name = $name;
            }

            public function GetName(){
                return $this -> Name;
            }

        }
        
        // class Employee {

        //     public $Name = "asd";

        //     private $dependency;
        //     public function __construct(IEmployee $dependency) {
        //        $this->dependency = $dependency;
        //     }
        // }
        

        // $injector = new Auryn\Injector;
        // $instance = new EmployeeFactory();
        // $injector -> define('Employee',[':dependency' => $instance]);

        // $myObj = $injector -> make('Employee');

        // echo $myObj -> GetName();

        $injector = new Auryn\Injector;
        $injector->share('EmployeeFactory');
        $instance = $injector->make('EmployeeFactory');
        $instance2 = $injector->make('EmployeeFactory');

        echo $instance -> GetName();
        echo "<br />";
        echo "&";
        echo "<br />";
        $instance2 -> SetName("Regina");
        echo $instance2 -> GetName();
        echo "<br />";
        echo "Forever <3";

?>