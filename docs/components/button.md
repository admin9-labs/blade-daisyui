# Button

DaisyUI [Button](https://daisyui.com/components/button/) 的 Blade 封装。

## 用法

```blade
<x-dui::button>Default</x-dui::button>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string | null | xs, sm, md, lg, xl |
| variant | string | null | outline, dash, soft, ghost, link |
| wide | bool | false | — |
| block | bool | false | — |
| square | bool | false | — |
| circle | bool | false | — |
| tag | string | 'button' | button, a, input, label 等任意 HTML 标签 |
| active | bool | false | — |
| disabled | bool | false | — |

## 示例

### 颜色

```blade
<x-dui::button color="primary">Primary</x-dui::button>
<x-dui::button color="secondary">Secondary</x-dui::button>
<x-dui::button color="accent">Accent</x-dui::button>
<x-dui::button color="error">Error</x-dui::button>
```

### 尺寸

```blade
<x-dui::button size="xs">Xsmall</x-dui::button>
<x-dui::button size="sm">Small</x-dui::button>
<x-dui::button>Medium</x-dui::button>
<x-dui::button size="lg">Large</x-dui::button>
<x-dui::button size="xl">Xlarge</x-dui::button>
```

### 变体样式

```blade
<x-dui::button variant="outline" color="primary">Outline</x-dui::button>
<x-dui::button variant="dash" color="primary">Dash</x-dui::button>
<x-dui::button variant="soft" color="primary">Soft</x-dui::button>
<x-dui::button variant="ghost">Ghost</x-dui::button>
<x-dui::button variant="link">Link</x-dui::button>
```

### 修饰符

```blade
<x-dui::button :wide="true">Wide</x-dui::button>
<x-dui::button :block="true">Block</x-dui::button>
<x-dui::button :square="true">S</x-dui::button>
<x-dui::button :circle="true">C</x-dui::button>
```

### 使用其他 HTML 标签

```blade
<x-dui::button tag="a" href="/about">Link Button</x-dui::button>
```

### 禁用状态

```blade
<x-dui::button :disabled="true">Disabled</x-dui::button>
```

### 激活状态

```blade
<x-dui::button :active="true" color="primary">Active</x-dui::button>
```

## 渲染结果

```html
<!-- 基础按钮 -->
<button class="btn">Default</button>

<!-- 带颜色和变体 -->
<button class="btn btn-primary btn-outline">Outline</button>

<!-- 使用其他标签 -->
<a class="btn btn-primary" href="/about">Link Button</a>

<!-- 禁用 -->
<button class="btn btn-disabled" disabled="disabled">Disabled</button>
```
