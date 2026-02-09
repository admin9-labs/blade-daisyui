# Link

DaisyUI [Link](https://daisyui.com/components/link/) 的 Blade 封装。

## 用法

```blade
<x-dui::link href="/about">Click me</x-dui::link>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, success, info, warning, error |
| hover | bool | false | -- |

## 示例

### 基础链接

```blade
<x-dui::link href="/about">Click me</x-dui::link>
```

### 带颜色

```blade
<x-dui::link color="primary" href="#">Primary link</x-dui::link>
<x-dui::link color="secondary" href="#">Secondary link</x-dui::link>
<x-dui::link color="accent" href="#">Accent link</x-dui::link>
<x-dui::link color="success" href="#">Success link</x-dui::link>
<x-dui::link color="info" href="#">Info link</x-dui::link>
<x-dui::link color="warning" href="#">Warning link</x-dui::link>
<x-dui::link color="error" href="#">Error link</x-dui::link>
```

### 仅悬停时显示下划线

```blade
<x-dui::link :hover="true" href="#">Hover to see underline</x-dui::link>
```

### 在段落中使用

```blade
<p>
    Tailwind CSS resets the style of links by default.
    Add "link" class to make it look like a
    <x-dui::link href="#">normal link</x-dui::link> again.
</p>
```

## 渲染结果

```html
<a href="#" class="link link-primary">Primary link</a>

<a href="#" class="link link-hover">Hover to see underline</a>
```
