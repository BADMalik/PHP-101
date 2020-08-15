<?php 
class App
{
    protected static $container = [];
    
    public static function getContainer()
    {
        return(static::$container);
    }
    public static function bind($key,$value)
    {
        static::$container[$key] = $value;
        
    }
    public static function get($key)
    {
        //die(var_dump(static::$container));
        if(!array_key_exists($key,static::$container))
        {
            throw new Exception("No key found in the container array");
        }
        return static::$container[$key];
    }
    public static function printNestedArray($a) {
        echo '<blockquote>';
        foreach ($a as $key => $value) {
          echo "$key: ";
          if (is_array($value)) {
            static::printNestedArray($value);
          } else {
            echo htmlspecialchars($value) . '<br />';
          }
        }
        echo '</blockquote>';
      }
   
    public static function getAll()
    {
       
    //    echo "<pre>";
    //     var_dump(static::$container);
    //     echo "</pre>";
    }
     
}
