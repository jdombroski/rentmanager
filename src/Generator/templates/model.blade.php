<?php echo "<?php \n\n"; ?>
namespace {{ $model->getNamespace() }};

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * {{ $model->getName() }} model.
 */
class {{ $model->getName() }} extends BaseModel
{

    protected $container = [];

    protected static $types = [
    @foreach($model->getProperties() as $property)
    "{{ $property->getName() }}" => "{{ $property->getType() }}",
    @endforeach
    ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() 
    {
        @foreach($model->getProperties() as $property) 
            @if($property->isKey()) 
                return isset($this->container['{{ $property->getName() }}']) ? $this->container['{{ $property->getName() }}'] : null; 
            @endif 
        @endforeach
    }


    #region Getters/Setters

    @foreach($model->getProperties() as $property)

    /**
	 * Get the [{{ $property->getName() }}] field.
	 * @return {{ $property->getType() }}
	 */
	public function get{{ ucfirst($property->getName()) }}() {
        return isset($this->container['{{ $property->getName() }}']) ? $this->container['{{ $property->getName() }}'] : null;
	}

	/**
	 * Set the [{{ $property->getName() }}] field.
     * @param  {{ $property->getType() }} ${{ lcfirst($property->getName()) }}
     * @return {{ $model->getName() }}
	 */
	public function set{{ ucfirst($property->getName()) }}(${{ lcfirst($property->getName()) }}) {
        $this->container['{{ $property->getName() }}'] = ${{ lcfirst($property->getName()) }};
        return $this;
	}

    @endforeach

    #endregion
}