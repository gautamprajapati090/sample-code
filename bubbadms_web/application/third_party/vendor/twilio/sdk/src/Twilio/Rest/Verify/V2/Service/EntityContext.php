<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Rest\Verify\V2\Service\Entity\ChallengeList;
use Twilio\Rest\Verify\V2\Service\Entity\FactorList;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property FactorList $factors
 * @property ChallengeList $challenges
 * @method \Twilio\Rest\Verify\V2\Service\Entity\FactorContext factors(string $sid)
 * @method \Twilio\Rest\Verify\V2\Service\Entity\ChallengeContext challenges(string $sid)
 */
class EntityContext extends InstanceContext {
    protected $_factors;
    protected $_challenges;

    /**
     * Initialize the EntityContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid Service Sid.
     * @param string $identity Unique external identifier of the Entity
     */
    public function __construct(Version $version, $serviceSid, $identity) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Entities/' . \rawurlencode($identity) . '';
    }

    /**
     * Delete the EntityInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool {
        $options = new Values($options);

        $headers = Values::of(['Twilio-Sandbox-Mode' => $options['twilioSandboxMode'], ]);

        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }

    /**
     * Fetch the EntityInstance
     *
     * @param array|Options $options Optional Arguments
     * @return EntityInstance Fetched EntityInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): EntityInstance {
        $options = new Values($options);

        $headers = Values::of(['Twilio-Sandbox-Mode' => $options['twilioSandboxMode'], ]);

        $payload = $this->version->fetch('GET', $this->uri, [], [], $headers);

        return new EntityInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['identity']
        );
    }

    /**
     * Access the factors
     */
    protected function getFactors(): FactorList {
        if (!$this->_factors) {
            $this->_factors = new FactorList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['identity']
            );
        }

        return $this->_factors;
    }

    /**
     * Access the challenges
     */
    protected function getChallenges(): ChallengeList {
        if (!$this->_challenges) {
            $this->_challenges = new ChallengeList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['identity']
            );
        }

        return $this->_challenges;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Verify.V2.EntityContext ' . \implode(' ', $context) . ']';
    }
}