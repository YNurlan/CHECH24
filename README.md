# CHECH24
```markdown
# CHECK24 Taschenrechner  

![CHECK24 Logo](assets/CHECK24_Logo.png)  

Ein moderner Taschenrechner mit PHP-Backend und Unit-Tests.  

---

## Übersicht  
Dieses Projekt umfasst einen webbasierten Taschenrechner, der folgende Funktionen unterstützt:  
- **Grundlegende Operationen**: Addition, Subtraktion, Multiplikation, Division.  
- **Fehlerbehandlung**: Auslösen von Exceptions bei Division durch Null.  
- **Unit-Tests**: Vollständige Testabdeckung aller Operationen.  
- **Moderne UI**: Responsives Design mit Animationen und CHECK24-Branding.  

---

## Technische Highlights  
- **PSR-4 Autoloading**: Strukturierte Namespaces für bessere Wartbarkeit.  
- **PHPUnit-Integration**: Tests können via Composer ausgeführt werden.  
- **Strikte Typisierung**: PHP 7.4+ mit `strict_types=1`.  
- **Sicherheit**: Validierung aller Benutzereingaben.  

---

## Installation  
1. **Repository klonen**:  
   ```bash  
   git clone https://github.com/dein-repository.git  
   ```  
2. **Abhängigkeiten installieren**:  
   ```bash  
   composer install  
   ```  

---

## Tests ausführen  
```bash  
composer test  
```  
**Beispielausgabe**:  
```  
✔ testAdd  
✔ testSubtract  
✔ testMultiply  
✔ testDivide  
✔ testDivideByZero  
```  
---

## Design-Features  
- **Responsive Layout**: Optimiert für alle Bildschirmgrößen.  
- **CSS-Animationen**: Sanfte Übergänge und Fade-Effekte.  
- **Branding**: CHECK24-Logo und Signatur des Autors.  

---

## Fehlerbehebung  
- **"Division by zero"**: Wird als Fehler angezeigt, falls Benutzer versucht, durch Null zu teilen.  
- **Unit-Test-Fehler**: Stellen Sie sicher, dass alle Abhängigkeiten mit `composer install` installiert sind.  
