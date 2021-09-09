
interface InterfaceShape{
    public function calculateArea();
    public function getClone();
}

class Shape implements InterfaceShape
{
    public string $name;
    protected float $width;
    protected float $length;
    private string $id;

    public const TYPE = 1;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
        $this->setId();
    }

    public function calculateArea() :float
    {
        return $this->length * $this->width;
    }

    public function setId(?string $type = null)
    {
        $newId = random_bytes(23);
        $this->id = bin2hex($newId);
    }

    public function getId() :string
    {
        return $this->id;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function getClone()
    {
        $obj = new stdClass();
        $obj->name = $this->name;
        $obj->width = $this->width;
        $obj->length = $this->length;
        $obj->id = $this->id;
        
        return $obj;
    }
    
    public function getType()
    {
        return $this::TYPE;
    }
}