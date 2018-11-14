<?php echo "<?php \n"; ?>

namespace {{ $resource->getNamespace() }};

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager {{ $resource->getModel()->getName() }} resource.
 */
class {{ $resource->getModel()->getName() }}ResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}";
    }

    /**
	 * Create a new instance of a {{ $resource->getModel()->getName() }} resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return {{ $resource->getModel()->getName() }}ResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    @foreach($resource->getModel()->getProperties() as $property)

    @if(in_array($property->getType(), ["string", "integer", "bool"]))

    /**
    * Filter resource by the [{{ $property->getName() }}] field.
    * @return {{ $resource->getModel()->getName() }}ResourceQuery
    */
    public function filterBy{{ ucfirst($property->getName()) }}($value, $operator = "=") 
    {
        $this->addFilter("{{ $property->getName() }}", $value, $operator);
        return $this;
    }

    @else
        
    /**
    * Embed the related [{{ $property->getName() }}] resource.
    * @return {{ $resource->getModel()->getName() }}ResourceQuery
    */
    public function embed{{ ucfirst($property->getName()) }}() {

        $this->addEmbed("{{ $property->getName() }}");
        return $this;
    }
    
    @endif

    @endforeach

    /**
	 * Save a {{ $resource->getModel()->getName() }} model or collection to the Rent Manager API.
	 * @param \{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}|\{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}[] $model
     * @return \{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}|\{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a {{ $resource->getModel()->getName() }} from the Rent Manager API.
	 * @return \{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a {{ $resource->getModel()->getName() }} collection from the Rent Manager API.
     * @return \{{ $resource->getModel()->getNamespace() }}\{{ $resource->getModel()->getName() }}[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}