# Divergentes Design System — Pipeline Figma → WordPress

## ARQUITECTURA DE TOKENS (actualizado Mayo 2026)

**FUENTE DE VERDAD:** `design-system/tokens/build/tokens.css` (auto-generado desde Figma)

`tokens-bridge.css`: provee (1) valores CSS-ready que tokens.css exporta como números crudos
(fuentes, spacing+px, radius+px, duration+ms, overlays+rgba), (2) aliases de primitivos
`--color-red-*` / `--color-navy-*` → `--color-brand-red-*` / `--color-brand-navy-*`,
y (3) overrides de Bootstrap. NO define tokens semánticos propios.

`nosotros.css`: usa `var(--nombre-de-tokens.css)` directamente.
Los nombres canónicos son: `--text-color-primary`, `--background-page`, `--text-color-inverse`, etc.

**Nombres canónicos (tokens.css):**
- Texto: `--text-color-primary`, `--text-color-secondary`, `--text-color-tertiary`, `--text-color-inverse`
- Fondos: `--background-page`, `--background-base`, `--background-subtle`
- Colores: `--color-brand-red-*`, `--color-brand-navy-*`, `--color-neutral-*`

**Nota:** tokens.css exporta radius, spacing y durations como números sin unidades.
Los valores CSS listos (con px/ms) están en tokens-bridge.css.

---

Usa esto con Claude Code, Windsurf Agent, o cualquier IA agéntica en terminal.

---

## CONTEXTO DEL PROYECTO

Estoy trabajando en el theme WordPress del sitio Divergentes.
El theme está en: `wp-content/themes/divergentes/`

Dentro del theme existe un design system con esta estructura:

```
design-system/tokens/
  figma-to-sd.py          ← script de transformación
  style-dictionary.config.js
  package.json
  source/
    raw/                  ← aquí van los JSON que exporto de Figma
      numbers.json
      primitivos.json
      semanticos.json
      componentes.json
    numbers.json          ← estos los genera figma-to-sd.py
    primitivos.json
    semanticos.json
    componentes.json
  build/
    tokens.css            ← output final que carga WordPress
    tokens.js
  node_modules/
```

---

## TAREA QUE DEBES EJECUTAR

Acabo de exportar variables nuevas desde Figma usando el plugin **"Export/Import Variables"**.
Los 4 archivos JSON están en: `design-system/tokens/source/raw/`

Ejecuta el pipeline completo en orden:

### PASO 1 — Transformar los JSON de Figma al formato Style Dictionary

```bash
cd wp-content/themes/divergentes/design-system/tokens
python3 figma-to-sd.py
```

Verifica que el output diga algo como:

```
✓ Mapa de IDs construido: 344 variables
✓ numbers.json → source/numbers.json (23 tokens)
✓ primitivos.json → source/primitivos.json (140 tokens)
✓ semanticos.json → source/semanticos.json (88 tokens)
✓ componentes.json → source/componentes.json (93 tokens)
```

Si hay errores, reportalos antes de continuar.

### PASO 2 — Compilar tokens con Style Dictionary

```bash
npm run build
```

Verifica que se haya actualizado: `build/tokens.css`

Confirma con:

```bash
head -30 build/tokens.css
```

Debe mostrar variables CSS en formato `:root { --color-... }`

### PASO 3 — Verificar que WordPress lo carga correctamente

El archivo `build/tokens.css` es enqueued en `functions.php` con:

```php
$tokens_file = get_stylesheet_directory() . '/design-system/tokens/build/tokens.css';
wp_enqueue_style('divergentes-design-tokens', ...);
```

No toques `functions.php`. Solo confirma que `build/tokens.css` existe y tiene contenido.

---

## REGLAS IMPORTANTES — NO HAGAS ESTO

- NO modifiques `tokens-bridge.css` directamente
- NO modifiques `nosotros.css` directamente
- NO toques `functions.php` ni `functions-page-nosotros.php`
- NO cambies `style-dictionary.config.js` a menos que te lo pida explícitamente
- NO instales paquetes npm nuevos sin pedirlo
- NO hagas `npm install` si ya existe `node_modules/`

---

## SI EL SCRIPT figma-to-sd.py FALLA

Revisa:

¿Están los 4 archivos en `source/raw/`?

```bash
ls source/raw/
```

¿El archivo JSON tiene el formato correcto? El script soporta dos formatos:

**Formato Figma Variables API** (más nuevo — tiene `variables` y `modes` en el root):
```bash
python3 -c "import json; d=json.load(open('source/raw/numbers.json')); print(list(d.keys()))"
# Esperado: ['id', 'name', 'modes', 'variableIds', 'variables']
```

**Formato DTCG** (tiene nombre de colección como clave root):
```bash
python3 -c "import json; d=json.load(open('source/raw/numbers.json')); print(list(d.keys()))"
# Esperado: ['numbers'] o array
```

Reporta el error exacto antes de intentar arreglarlo.

---

## SI npm run build FALLA

Revisa:

```bash
cat style-dictionary.config.js   # confirma que source apunta a 'source/*.json'
node --version                    # debe ser >= 14
```

Reporta el error completo.

---

## AL TERMINAR, REPORTA

```
✓ figma-to-sd.py ejecutado — N variables procesadas
✓ npm run build completado — sin warnings
✓ build/tokens.css actualizado — tamaño: X KB
✓ Pipeline completo. WordPress cargará los nuevos tokens.
```

---

# REGLAS DE NAMING (OBLIGATORIAS)

Toda clase nueva debe:

- usar prefijo `nos-` 
- seguir metodología BEM
- evitar nombres genéricos
- evitar nombres de contenido editorial
- evitar clases acopladas al texto

## Correcto

```html
<div class="nos-hero__line"></div>
<div class="nos-hero__word"></div>
<div class="nos-card__meta"></div>
```

## Incorrecto

```html
<div class="quienes"></div>
<div class="titulo"></div>
<div class="rojo"></div>
<div class="big-text"></div>
```

Nunca crear:

```css
.text
.title
.card
.section
.wrapper
.red
.main
```

sin prefijo y contexto.

---

# REGLAS DE TOKENS

Nunca usar:

- HEX directos
- tamaños hardcoded
- font-family directos
- spacing manual

Usar siempre:

```css
var(--text-color-primary)
var(--font-display)
var(--space-lg)
var(--text-display-xl)
```

---

# REGLAS DE TIPOGRAFÍA

Typography debe venir desde tokens.

**NO:**

```css
font-size: 64px;
```

**SÍ:**

```css
font-size: var(--text-display-xl);
```

---

# REGLAS DE ESTRUCTURA

- PHP define estructura
- CSS define layout
- Tokens definen valores
- Figma define intención visual

Nunca mezclar responsabilidades.

---

# REGLAS WORDPRESS

- no modificar Bootstrap global
- no sobrescribir .container
- no tocar body
- no usar selectors globales
- scopear con .nosotros-page o nos-*

---

# Lo MÁS importante

Tu IA ahora mismo aprende por:
- contexto reciente
- archivos abiertos
- instrucciones persistentes

Entonces:

# Sí.

`CLAUDE.md` se vuelve memoria arquitectónica.

---

# Mi recomendación REAL

## Dejá:

```txt
CLAUDE.md
```

solo como:

- pipeline
- Figma export
- build system

Y convertí:

```txt
CLAUDE.md
```

en:

"Reglas maestras del proyecto"

Porque ahí vivirá:

- cómo pensar
- cómo nombrar
- cómo estructurar
- cómo usar tokens
- cómo mapear Figma
- cómo escribir CSS
