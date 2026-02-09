# Steps

DaisyUI [Steps](https://daisyui.com/components/steps/) 的 Blade 封装。

## 用法

```blade
<x-dui::steps>
    <x-dui::steps.step color="primary">Register</x-dui::steps.step>
    <x-dui::steps.step color="primary">Choose plan</x-dui::steps.step>
    <x-dui::steps.step>Purchase</x-dui::steps.step>
    <x-dui::steps.step>Receive Product</x-dui::steps.step>
</x-dui::steps>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| direction | string | null | vertical, horizontal |

## 子组件

### `<x-dui::steps.step>`

单个步骤项。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |

### `<x-dui::steps.icon>`

步骤的自定义图标内容。

| Prop | Type | Default | Values |
|------|------|---------|--------|
| — | — | — | 无自定义 props |

## 示例

### 水平步骤（默认）

```blade
<x-dui::steps>
    <x-dui::steps.step color="primary">Register</x-dui::steps.step>
    <x-dui::steps.step color="primary">Choose plan</x-dui::steps.step>
    <x-dui::steps.step>Purchase</x-dui::steps.step>
    <x-dui::steps.step>Receive Product</x-dui::steps.step>
</x-dui::steps>
```

### 垂直步骤

```blade
<x-dui::steps direction="vertical">
    <x-dui::steps.step color="primary">Register</x-dui::steps.step>
    <x-dui::steps.step color="primary">Choose plan</x-dui::steps.step>
    <x-dui::steps.step>Purchase</x-dui::steps.step>
    <x-dui::steps.step>Receive Product</x-dui::steps.step>
</x-dui::steps>
```

### 响应式（小屏垂直，大屏水平）

```blade
<x-dui::steps direction="vertical" class="lg:steps-horizontal">
    <x-dui::steps.step color="primary">Register</x-dui::steps.step>
    <x-dui::steps.step color="primary">Choose plan</x-dui::steps.step>
    <x-dui::steps.step>Purchase</x-dui::steps.step>
    <x-dui::steps.step>Receive Product</x-dui::steps.step>
</x-dui::steps>
```

### 自定义颜色

```blade
<x-dui::steps>
    <x-dui::steps.step color="info">Fly to moon</x-dui::steps.step>
    <x-dui::steps.step color="info">Shrink the moon</x-dui::steps.step>
    <x-dui::steps.step color="info">Grab the moon</x-dui::steps.step>
    <x-dui::steps.step color="error" data-content="?">Sit on toilet</x-dui::steps.step>
</x-dui::steps>
```

### 带自定义图标

```blade
<x-dui::steps>
    <x-dui::steps.step color="neutral">
        <x-dui::steps.icon>1</x-dui::steps.icon>
        Step 1
    </x-dui::steps.step>
    <x-dui::steps.step color="neutral">
        <x-dui::steps.icon>2</x-dui::steps.icon>
        Step 2
    </x-dui::steps.step>
    <x-dui::steps.step>
        <x-dui::steps.icon>3</x-dui::steps.icon>
        Step 3
    </x-dui::steps.step>
</x-dui::steps>
```

### 使用 data-content 自定义步骤标记

```blade
<x-dui::steps>
    <x-dui::steps.step color="neutral" data-content="?">Step 1</x-dui::steps.step>
    <x-dui::steps.step color="neutral" data-content="!">Step 2</x-dui::steps.step>
    <x-dui::steps.step color="neutral" data-content="✓">Step 3</x-dui::steps.step>
    <x-dui::steps.step color="neutral" data-content="✕">Step 4</x-dui::steps.step>
</x-dui::steps>
```

## 渲染结果

```html
<ul class="steps steps-vertical">
    <li class="step step-primary">Register</li>
    <li class="step step-primary">Choose plan</li>
    <li class="step">Purchase</li>
    <li class="step">
        <span class="step-icon">1</span>
        Receive Product
    </li>
</ul>
```
