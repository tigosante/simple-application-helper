<?php

namespace src\interfaces\Repository;

use src\Interfaces\{
  Helpers\SetDataHelper,
  Connections\DataBaseConnectionInterface
};
use src\Interfaces\Audit\AuditInterface;

interface RepositoryDataDBInterface extends SetDataHelper
{
  /**
   * @return self
   */
  public static function config(DataBaseConnectionInterface &$dataBaseConnectionInterface): self;

  /**
   * @return bool
   */
  public function handleData(): bool;

  /**
   * @return array
   */
  public function recoverData(): array;

  /**
   * @return string
   */
  public function getQuery(): string;

  /**
   * @return void
   */
  public function setQuery(string $query): void;

  /**
   * @return void
   */
  public function clean(): void;
}
