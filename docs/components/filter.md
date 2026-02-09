# Filter

DaisyUI [Filter](https://daisyui.com/components/filter/) 的 Blade 封装。

## 用法

```blade
<x-dui::filter>
    <input class="btn btn-square" type="reset" value="×" />
    <input class="btn" type="radio" name="frameworks" aria-label="Svelte" />
    <input class="btn" type="radio" name="frameworks" aria-label="Vue" />
    <input class="btn" type="radio" name="frameworks" aria-label="React" />
</x-dui::filter>
```

## Props

### filter (主组件)

无自定义 Props，自动添加 `filter` class。可通过 `$attributes` 透传任意 HTML 属性。

### filter.item (子组件)

无自定义 Props，渲染为 `<input class="btn" type="radio" />`。可通过 `$attributes` 透传 `name`、`aria-label` 等属性。

### filter.reset (子组件)

无自定义 Props，渲染为 `<input class="btn filter-reset" type="radio" />`。可通过 `$attributes` 透传 `name`、`aria-label` 等属性。

## 子组件

- `<x-dui::filter.item>` - 筛选项（radio 类型），自动添加 `btn` class
- `<x-dui::filter.reset>` - 重置按钮（radio 类型），用于非 `<form>` 场景

## 示例

### 使用 HTML form（推荐）

```blade
<form>
    <x-dui::filter>
        <input class="btn btn-square" type="reset" value="×" />
        <input class="btn" type="radio" name="frameworks" aria-label="Svelte" />
        <input class="btn" type="radio" name="frameworks" aria-label="Vue" />
        <input class="btn" type="radio" name="frameworks" aria-label="React" />
    </x-dui::filter>
</form>
```

### 使用 filter.item（推荐）

```blade
<x-dui::filter>
    <x-dui::filter.reset name="frameworks" aria-label="All" />
    <x-dui::filter.item name="frameworks" aria-label="Svelte" />
    <x-dui::filter.item name="frameworks" aria-label="Vue" />
    <x-dui::filter.item name="frameworks" aria-label="React" />
</x-dui::filter>
```

### 不使用 form（使用 filter.reset，旧用法）

```blade
<x-dui::filter>
    <x-dui::filter.reset name="metaframeworks" aria-label="All" />
    <input class="btn" type="radio" name="metaframeworks" aria-label="Sveltekit" />
    <input class="btn" type="radio" name="metaframeworks" aria-label="Nuxt" />
    <input class="btn" type="radio" name="metaframeworks" aria-label="Next.js" />
</x-dui::filter>
```

## 渲染结果

```html
<!-- 使用 form -->
<div class="filter">
    <input class="btn btn-square" type="reset" value="×" />
    <input class="btn" type="radio" name="frameworks" aria-label="Svelte" />
    <input class="btn" type="radio" name="frameworks" aria-label="Vue" />
    <input class="btn" type="radio" name="frameworks" aria-label="React" />
</div>

<!-- 不使用 form -->
<div class="filter">
    <input class="btn filter-reset" type="radio" name="metaframeworks" aria-label="All" />
    <input class="btn" type="radio" name="metaframeworks" aria-label="Sveltekit" />
    <input class="btn" type="radio" name="metaframeworks" aria-label="Nuxt" />
    <input class="btn" type="radio" name="metaframeworks" aria-label="Next.js" />
</div>
```
