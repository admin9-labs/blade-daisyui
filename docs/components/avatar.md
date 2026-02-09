# Avatar

DaisyUI [Avatar](https://daisyui.com/components/avatar/) 的 Blade 封装。

## 用法

```blade
<x-dui::avatar>
    <img src="/img/user.jpg" alt="用户头像" />
</x-dui::avatar>
```

## Props

### avatar (index)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| size | string\|null | null | 8, 12, 16, 20, 24, 32 等 Tailwind 宽度值 |
| shape | string\|null | null | squircle, hexagon |
| online | bool | false | — |
| offline | bool | false | — |
| placeholder | bool | false | — |

### avatar.group

无额外 Props。

## 子组件

- `<x-dui::avatar.group>` — 头像组容器，自动添加 `-space-x-6` 重叠效果

## 示例

### 基础头像

```blade
<x-dui::avatar>
    <img src="/img/user.jpg" alt="用户头像" />
</x-dui::avatar>
```

### 自定义尺寸

```blade
<x-dui::avatar size="32">
    <img src="/img/user.jpg" alt="大头像" />
</x-dui::avatar>

<x-dui::avatar size="12">
    <img src="/img/user.jpg" alt="小头像" />
</x-dui::avatar>
```

### 在线/离线状态

```blade
<x-dui::avatar online>
    <img src="/img/user.jpg" alt="在线用户" />
</x-dui::avatar>

<x-dui::avatar offline>
    <img src="/img/user.jpg" alt="离线用户" />
</x-dui::avatar>
```

### 占位符（字母头像）

```blade
<x-dui::avatar placeholder>
    <div class="bg-neutral text-neutral-content">
        <span class="text-3xl">A</span>
    </div>
</x-dui::avatar>
```

### 特殊形状

```blade
<x-dui::avatar shape="squircle">
    <img src="/img/user.jpg" alt="圆角方形头像" />
</x-dui::avatar>

<x-dui::avatar shape="hexagon">
    <img src="/img/user.jpg" alt="六边形头像" />
</x-dui::avatar>
```

### 头像组

```blade
<x-dui::avatar.group>
    <x-dui::avatar size="12">
        <img src="/img/user1.jpg" alt="用户1" />
    </x-dui::avatar>
    <x-dui::avatar size="12">
        <img src="/img/user2.jpg" alt="用户2" />
    </x-dui::avatar>
    <x-dui::avatar size="12" placeholder>
        <div class="bg-neutral text-neutral-content">
            <span>+99</span>
        </div>
    </x-dui::avatar>
</x-dui::avatar.group>
```

## 渲染结果

```html
<div class="avatar avatar-online">
    <div class="rounded-full w-24">
        <img src="/img/user.jpg" alt="在线用户" />
    </div>
</div>
```
