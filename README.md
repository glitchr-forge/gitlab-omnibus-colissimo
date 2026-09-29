# omnibus/colissimo

Colissimo (La Poste) for [glitchr/omnibus](https://gitlab.glitchr.dev/public-repository/agnostic/omnibus/omnibus).

For now the gateway prices parcels from configuration only; labels, tracking and relay points (Colissimo's web services) are still to be wired.

```yaml
omnibus:
    gateways:
        colissimo:
            factory: colissimo
            options:
                rates: [...]   # Omnibus\Action\ConfiguredRatingAction
```
