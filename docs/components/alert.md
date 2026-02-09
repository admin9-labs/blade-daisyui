# Alert

DaisyUI [Alert](https://daisyui.com/components/alert/) 的 Blade 封装。

## 用法

```blade
<x-dui::alert>12 unread messages. Tap to see.</x-dui::alert>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | info, success, warning, error |
| variant | string | null | outline, dash, soft |
| direction | string | null | vertical, horizontal |

## 示例

### 基本用法
```blade
<x-dui::alert>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info h-6 w-6 shrink-0">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
  </svg>
  <span>12 unread messages. Tap to see.</span>
</x-dui::alert>
```

### 颜色
```blade
<x-dui::alert color="info">New software update available.</x-dui::alert>
<x-dui::alert color="success">Your purchase has been confirmed!</x-dui::alert>
<x-dui::alert color="warning">Warning: Invalid email address!</x-dui::alert>
<x-dui::alert color="error">Error! Task failed successfully.</x-dui::alert>
```

### 变体样式
```blade
<x-dui::alert color="info" variant="soft">Soft info alert</x-dui::alert>
<x-dui::alert color="success" variant="outline">Outline success alert</x-dui::alert>
<x-dui::alert color="warning" variant="dash">Dash warning alert</x-dui::alert>
```

### 响应式方向
```blade
<x-dui::alert direction="vertical" class="sm:alert-horizontal">
  <span>We use cookies for no reason.</span>
  <div>
    <button class="btn btn-sm">Deny</button>
    <button class="btn btn-sm btn-primary">Accept</button>
  </div>
</x-dui::alert>
```

## 渲染结果
```html
<div role="alert" class="alert alert-info alert-soft">Soft info alert</div>
```
