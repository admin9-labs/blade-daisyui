# Badge

DaisyUI [Badge](https://daisyui.com/components/badge/) 的 Blade 封装。

## 用法

```blade
<x-dui::badge>默认</x-dui::badge>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string\|null | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string\|null | null | xs, sm, md, lg, xl |
| variant | string\|null | null | outline, dash, soft, ghost |

## 示例

### 颜色

```blade
<x-dui::badge color="primary">Primary</x-dui::badge>
<x-dui::badge color="secondary">Secondary</x-dui::badge>
<x-dui::badge color="accent">Accent</x-dui::badge>
<x-dui::badge color="info">Info</x-dui::badge>
<x-dui::badge color="success">Success</x-dui::badge>
<x-dui::badge color="warning">Warning</x-dui::badge>
<x-dui::badge color="error">Error</x-dui::badge>
```

### 尺寸

```blade
<x-dui::badge size="xs">XS</x-dui::badge>
<x-dui::badge size="sm">SM</x-dui::badge>
<x-dui::badge size="md">MD</x-dui::badge>
<x-dui::badge size="lg">LG</x-dui::badge>
<x-dui::badge size="xl">XL</x-dui::badge>
```

### 变体样式

```blade
<x-dui::badge color="primary" variant="outline">Outline</x-dui::badge>
<x-dui::badge color="primary" variant="dash">Dash</x-dui::badge>
<x-dui::badge color="primary" variant="soft">Soft</x-dui::badge>
<x-dui::badge variant="ghost">Ghost</x-dui::badge>
```

### 空徽章（圆点）

```blade
<x-dui::badge color="primary" size="lg" />
<x-dui::badge color="primary" size="sm" />
<x-dui::badge color="primary" size="xs" />
```

## 渲染结果

```html
<span class="badge badge-primary badge-lg badge-soft">Primary</span>
```
