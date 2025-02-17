<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Setup\Test\Unit\Model;

use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\Config\ConfigOptionsListConstants;
use Magento\Framework\Config\Data\ConfigData;
use Magento\Framework\Encryption\KeyValidator;
use Magento\Framework\Setup\Option\FlagConfigOption;
use Magento\Framework\Setup\Option\TextConfigOption;
use Magento\Setup\Model\ConfigGenerator;
use Magento\Setup\Model\ConfigOptionsList;
use Magento\Setup\Model\ConfigOptionsList\DriverOptions;
use Magento\Setup\Model\ConfigOptionsList\Lock;
use Magento\Setup\Validator\DbValidator;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ConfigOptionsListTest extends TestCase
{
    /**
     * @var ConfigOptionsList
     */
    private $object;

    /**
     * @var ConfigGenerator|MockObject
     */
    private $generator;

    /**
     * @var MockObject|DeploymentConfig
     */
    private $deploymentConfig;

    /**
     * @var DbValidator|MockObject
     */
    private $dbValidator;

    /**
     * @var KeyValidator|MockObject
     */
    private $encryptionKeyValidator;

    /**
     * @var ConfigOptionsList\DriverOptions
     */
    private $driverOptionsMock;

    protected function setUp(): void
    {
        $this->generator = $this->createMock(ConfigGenerator::class);
        $this->deploymentConfig = $this->createMock(DeploymentConfig::class);
        $this->dbValidator = $this->createMock(DbValidator::class);
        $this->encryptionKeyValidator = $this->createMock(KeyValidator::class);
        $this->driverOptionsMock = $this->createMock(DriverOptions::class);
        $this->object = new ConfigOptionsList(
            $this->generator,
            $this->dbValidator,
            $this->encryptionKeyValidator,
            $this->driverOptionsMock
        );
    }

    public function testGetOptions()
    {
        $options = $this->object->getOptions();
        $this->assertInstanceOf(TextConfigOption::class, $options[0]);
        $this->assertSame('Encryption key', $options[0]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[1]);
        $this->assertSame('DataPatch server host', $options[1]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[2]);
        $this->assertSame('DataPatch name', $options[2]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[3]);
        $this->assertSame('DataPatch server username', $options[3]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[4]);
        $this->assertSame('DataPatch server engine', $options[4]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[5]);
        $this->assertSame('DataPatch server password', $options[5]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[6]);
        $this->assertSame('DataPatch table prefix', $options[6]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[7]);
        $this->assertSame('DataPatch type', $options[7]->getDescription());
        $this->assertInstanceOf(TextConfigOption::class, $options[8]);
        $this->assertSame('DataPatch  initial set of commands', $options[8]->getDescription());
        $this->assertInstanceOf(FlagConfigOption::class, $options[9]);
        $this->assertSame(
            'If specified, then db connection validation will be skipped',
            $options[9]->getDescription()
        );
        $this->assertInstanceOf(TextConfigOption::class, $options[10]);
        $this->assertSame('http Cache hosts', $options[10]->getDescription());
        $this->assertGreaterThanOrEqual(11, count($options));
    }

    public function testCreateOptions()
    {
        $configDataMock = $this->createMock(ConfigData::class);
        $this->generator->expects($this->once())->method('createCryptConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createDefinitionsConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createDbConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createResourceConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createXFrameConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createCacheHostsConfig')->willReturn($configDataMock);

        $configData = $this->object->createConfig([Lock::INPUT_KEY_LOCK_PROVIDER => 'db'], $this->deploymentConfig);
        $this->assertGreaterThanOrEqual(6, count($configData));
    }

    public function testCreateOptionsWithOptionalNull()
    {
        $configDataMock = $this->createMock(ConfigData::class);
        $this->generator->expects($this->once())->method('createCryptConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createDefinitionsConfig')->willReturn(null);
        $this->generator->expects($this->once())->method('createDbConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createResourceConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createXFrameConfig')->willReturn($configDataMock);
        $this->generator->expects($this->once())->method('createCacheHostsConfig')->willReturn($configDataMock);

        $configData = $this->object->createConfig([Lock::INPUT_KEY_LOCK_PROVIDER => 'db'], $this->deploymentConfig);
        $this->assertGreaterThanOrEqual(6, count($configData));
    }

    public function testValidateSuccess()
    {
        $options = [
            ConfigOptionsListConstants::INPUT_KEY_DB_PREFIX => 'prefix',
            ConfigOptionsListConstants::INPUT_KEY_SESSION_SAVE => 'files',
            ConfigOptionsListConstants::INPUT_KEY_SKIP_DB_VALIDATION => false,
            ConfigOptionsListConstants::INPUT_KEY_DB_NAME => 'name',
            ConfigOptionsListConstants::INPUT_KEY_DB_HOST => 'host',
            ConfigOptionsListConstants::INPUT_KEY_DB_USER => 'user',
            ConfigOptionsListConstants::INPUT_KEY_DB_PASSWORD => 'pass',
            Lock::INPUT_KEY_LOCK_PROVIDER => 'db'
        ];
        $this->prepareValidationMocks();

        $this->assertEquals([], $this->object->validate($options, $this->deploymentConfig));
    }

    public function testValidateInvalidSessionHandler()
    {
        $invalidSaveHandler = 'clay-tablet';

        $options = [
            ConfigOptionsListConstants::INPUT_KEY_DB_PREFIX => 'prefix',
            ConfigOptionsListConstants::INPUT_KEY_SESSION_SAVE => $invalidSaveHandler,
            ConfigOptionsListConstants::INPUT_KEY_SKIP_DB_VALIDATION => false,
            ConfigOptionsListConstants::INPUT_KEY_DB_NAME => 'name',
            ConfigOptionsListConstants::INPUT_KEY_DB_HOST => 'host',
            ConfigOptionsListConstants::INPUT_KEY_DB_USER => 'user',
            ConfigOptionsListConstants::INPUT_KEY_DB_PASSWORD => 'pass',
            Lock::INPUT_KEY_LOCK_PROVIDER => 'db'
        ];
        $this->prepareValidationMocks();

        $this->assertEquals(
            ["Invalid session handler '{$invalidSaveHandler}'"],
            $this->object->validate($options, $this->deploymentConfig)
        );
    }

    public function testValidateEmptyEncryptionKey()
    {
        $options = [
            ConfigOptionsListConstants::INPUT_KEY_SKIP_DB_VALIDATION => true,
            ConfigOptionsListConstants::INPUT_KEY_ENCRYPTION_KEY => '',
            Lock::INPUT_KEY_LOCK_PROVIDER => 'db'
        ];
        $this->assertEquals(
            ['Invalid encryption key. Encryption key must be 32 character string without any white space.'],
            $this->object->validate($options, $this->deploymentConfig)
        );
    }

    private function prepareValidationMocks()
    {
        $configDataMock = $this->getMockBuilder(ConfigData::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->dbValidator->expects($this->once())->method('checkDatabaseTablePrefix')->willReturn($configDataMock);
        $this->dbValidator->expects($this->once())
            ->method('checkDatabaseConnectionWithDriverOptions')
            ->willReturn($configDataMock);
        $this->dbValidator
            ->expects($this->once())
            ->method('checkDatabaseConnectionWithDriverOptions')
            ->willReturn($configDataMock);
    }

    /**
     * @param string $hosts
     * @param bool $expectedError
     * @dataProvider validateCacheHostsDataProvider
     */
    public function testValidateCacheHosts($hosts, $expectedError)
    {
        $options = [
            ConfigOptionsListConstants::INPUT_KEY_SKIP_DB_VALIDATION => true,
            ConfigOptionsListConstants::INPUT_KEY_CACHE_HOSTS => $hosts,
            Lock::INPUT_KEY_LOCK_PROVIDER => 'db'
        ];
        $result = $this->object->validate($options, $this->deploymentConfig);
        if ($expectedError) {
            $this->assertCount(1, $result);
            $this->assertEquals("Invalid http cache hosts '$hosts'", $result[0]);
        } else {
            $this->assertCount(0, $result);
        }
    }

    /**
     * @return array
     */
    public function validateCacheHostsDataProvider()
    {
        return [
            ['localhost', false],
            ['122.11.2.34:800', false],
            ['122.11.2.34:800,localhost', false],
            ['website.com:9000', false],
            ['web-site.com:9000', false],
            ['website.com/m2ce:9000', true],
            ['website.com+:9000', true],
        ];
    }
}
