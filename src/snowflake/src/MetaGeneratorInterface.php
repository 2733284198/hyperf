<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Snowflake;

interface MetaGeneratorInterface
{
    const DEFAULT_BEGIN_SECOND = 1560960000;

    public function generate(): Meta;

    public function getBeginTimestamp(): int;

    public function getConfiguration(): ConfigurationInterface;
}
