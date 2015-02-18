# Symfony GStandaard Bundle
[![Total Downloads](https://poser.pugx.org/pharmaintelligence/gstandaard-bundle/d/total.png)](https://packagist.org/packages/pharmaintelligence/gstandaard-bundle)

This bundle is licensed under the [MIT License](LICENSE).

GStandaard bundle contains propel bindings and an import task for the [Z-Index](http://www.z-index.nl/g-standaard) dataset.

## Requirements

* Symfony 2.4.x
* Propel bundle 1.4.x
* PHP CURL extension
* See also the `require` section of [composer.json](composer.json)

## Installation
Install the latest version with `composer require pharmaintelligence/gstandaard-bundle`

## Documentation

### Setup
GStandaard-Bundle hooks into the propel settings from your project. Setting up your tables and om-classes can be done using the `propel:model:build` and `propel:migration:*` tasks.

Two parameters are required in your parameters.yml:

 - `gstandaard_user:`
 - `gstandaard_password:`

These parameters are the username/password you've received from Z-Index to download the G-Standaard.

### Importing G-Standaard
In your project directory run:
`php app\console pharma-intelligence:g-standaard:import`
Appending the option `--alleenMutaties` speeds up the import process by only processing mutated fields.

### Usage
All tables available through the G-Standaard are available within this bundle, usage is through propel's query & om classes.

### Added bonuses
An extra table is available: `gs_artikel_eigenschappen`. This table is a denormalized table containing the most used properties for all Z-Index numbers.

The `pi.gstandaard.barcode_service` is registered through the service container. It allows a user to search for products based on barcodes.

## Contributing

Pull requests are welcome. 
