<?php
namespace Escavador\Vespa\Exception;

use Escavador\Vespa\Interfaces\AbstractDocument;
use Escavador\Vespa\Models\DocumentDefinition;

class VespaFailUpdateDocumentException extends VespaException
{
    protected $document;
    protected $definition;

    public function __construct(DocumentDefinition $definition, AbstractDocument $document, $code, $message)
    {
        $this->code = $code;
        $this->document = $document;
        $this->definition = $definition;
        $this->message = "[{$definition->getDocumentType()}]: Document {$this->document->getVespaDocumentId()}".
            " was not updated to Vespa. Exception Message: $message";
    }
}
