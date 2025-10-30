# DDD Library

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/php-%5E8.2-8892BF.svg)](https://www.php.net/)

A lightweight PHP library providing essential building blocks for Domain-Driven Design (DDD) applications.

## Features

- **Value Objects**: Base implementation for immutable value objects
- **Domain Events**: Foundation for domain event handling
- **Aggregate Root**: Base class for aggregate roots in domain models
---
- **Commands**: Base command pattern implementation
- **Process manager**: in development
---
- **Query**: in development
- **Read model**: in development

## Requirements

- PHP 8.2 or higher
- Composer

## Installation

```bash
composer require symfony-ddd/library
```

## Usage

### Value Objects

```php
use DDD\Library\Value\StringValue;

class Email extends StringValue
{
    protected static function from(string $value): self
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid email address");
        }
    }
}
```

### Domain Events

```php
use DDD\Library\Domain\DomainEvent;

class UserRegistered extends DomainEvent
{
    public function __construct(
        private string $userId,
        private string $email
    ) {
    }
   
}
```

### Commands

```php
use DDD\Library\Application\Command;

class RegisterUserCommand extends Command
{
    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {}
}
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request, feedback or Idea.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
