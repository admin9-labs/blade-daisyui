# Divider

DaisyUI [Divider](https://daisyui.com/components/divider/) 的 Blade 封装。

## 用法

```blade
<x-dui::divider>OR</x-dui::divider>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, success, warning, info, error |
| direction | string | null | vertical, horizontal |
| placement | string | null | start, end |
| label | string | null | — |

## 示例

### 基本分割线

```blade
<div class="flex w-full flex-col">
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">content</div>
  <x-dui::divider>OR</x-dui::divider>
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">content</div>
</div>
```

### 使用 label prop

```blade
<x-dui::divider label="OR" />
```

### 水平分割线

```blade
<div class="flex w-full">
  <div class="grid h-20 grow card bg-base-300 rounded-box place-items-center">content</div>
  <x-dui::divider direction="horizontal">OR</x-dui::divider>
  <div class="grid h-20 grow card bg-base-300 rounded-box place-items-center">content</div>
</div>
```

### 无文字分割线

```blade
<x-dui::divider />
```

### 带颜色

```blade
<x-dui::divider color="primary">Primary</x-dui::divider>
<x-dui::divider color="secondary">Secondary</x-dui::divider>
<x-dui::divider color="accent">Accent</x-dui::divider>
```

### 文字位置

```blade
<x-dui::divider placement="start">Start</x-dui::divider>
<x-dui::divider>Default</x-dui::divider>
<x-dui::divider placement="end">End</x-dui::divider>
```

## 渲染结果

```html
<div class="divider divider-primary divider-horizontal divider-start">OR</div>
```
