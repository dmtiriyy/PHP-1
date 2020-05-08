<? php
class Singleton {
     
    private static $instance;
     
    /**
     * Защищаем от создания через new Singleton
     * @return Singleton
     */
    private function __construct() {}
  
    /**
     * Защищаем от создания через клонирование
     * @return Singleton
     */
    private function __clone() {}
  
    /**
     * Защищаем от создания через unserialize
     * @return Singleton
     */
    private function __wakeup() {}
     
    /**
     * Возвращает единственный экземпляр класса
     * @return Singleton
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
     
    /**
     * Делаем что-нибудь
     */
    public function doAction() {}
}
?>