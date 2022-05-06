# Mandalore Wiki

```mermaid
  flowchart LR;
      L[Landingpage]
      M[Mandalore]
      F[Mandalorians]
      H[History]
      
      L --> M
      L --> F
      L --> H
      
      subgraph "The Planet"
        P[Places and Cities]
        MM[Mandalores Moons]
        
        M --> P
        M --> MM
      end
      
      subgraph "Famous Mandalorians"
        JF[Jango Fett]
        BF[Boba Fett]
        SV[Sabine Wren]
        PV[Pre Visla]
        DJ[Din Jarrin]
        
        F --> JF
        F --> BF
        F --> SV
        F --> PV
        F --> DJ
      end
      
      subgraph "Mandalorian History"
        MC[Mandalorian Crusades]
        WJ[War against the Jedi]
        AE[Age of the Empire]
        
        H --> MC
        H --> WJ
        H --> AE
      end
```

## Contribute
- Write readable, correct and simple code (**K**eep **I**t **S**imple and **S**tupid)
- Comment incomprehensible code
- Comply with the Conventional Commit Messages [Standard](https://www.conventionalcommits.org/en/v1.0.0/) (in commits and pr's)
- Avoid merge commits

### Contribution flow:
1. think of a change
2. fork the repository
3. make changes
4. compare changes and make a pull request
5. await review and merge

## Start locally
