<?php
/**
 * SchemaFactory class file
 */
namespace Graviton\JsonSchemaBundle\Schema;

use JsonSchema\RefResolver;

/**
 * JSON schema factory
 *
 * @author   List of contributors <https://github.com/libgraviton/graviton/graphs/contributors>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://swisscom.ch
 */
class SchemaFactory
{
    /**
     * @var RefResolver
     */
    private $refResolver;

    /**
     * Constructor
     *
     * @param RefResolver $resolver Ref resolver
     */
    public function __construct(RefResolver $resolver)
    {
        $this->refResolver = $resolver;
    }

    /**
     * Create JSON schema
     *
     * @param string $uri Schema URI
     * @return \stdClass
     */
    public function createSchema($uri)
    {
        return $this->refResolver->resolve($uri);
    }
}
